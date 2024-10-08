<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\CartTicket;
use App\Models\Ticket;
use App\Models\Order;
use App\Models\UserTicket;
use App\Models\Sale;
use Laravel\Cashier\Cashier;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CheckoutController extends Controller
{
    public function index(Request $request, string $userid, string $cartid) {
        //  get active cart
        $cart = Cart::where('user_id', $userid)->where('is_active', true)->first();
        if ($cart == null) return response(['message'=>'cart not fund']);

        //  get all tickets and amount_paid for this cart
        $items = CartTicket::where('cart_id', $cartid)->get()->toArray();
        if ($items == null) return response(['message'=>'tickets not fund']);
        
        $line_items = array();
        $amount_paid = 0;
    
        //  prepare a list of items for stripe
        for ($i = 0; $i < count($items); $i++) {
            $ticket = Ticket::where('id', $items[$i]['ticket_id'])->first();
            $tickets_cost = $ticket['price'] * $items[$i]['quantity'];
            $amount_paid = $amount_paid + $tickets_cost;
            $item = array(
                'price' => $ticket['stripe_item_price'],
                'quantity' => $items[$i]['quantity'],
            );
            array_push($line_items, $item);
        }
        
        //  create payment order for this cart
        $order = Order::create([
            'cart_id' => $cart->id,
            'user_id' => $userid,
            'amount_paid' => $amount_paid,
            'status' => 'incomplete',
        ]);

        //  update cart infos
        $cart->order_id = $order->id;
        $cart->save();
    
        return $request->user()->checkout($line_items, [
            'success_url' => route('checkout-success').'?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => route('checkout-cancel').'?session_id={CHECKOUT_SESSION_ID}',
            'metadata' => ['order_id' => $order->id],
        ]);
    }

    public function checkoutSuccess(Request $request) {
        $sessionId = $request->get('session_id');
 
        if ($sessionId === null) {
            return;
        }
    
        $session = Cashier::stripe()->checkout->sessions->retrieve($sessionId);
    
        if ($session->payment_status !== 'paid') {
            return;
        }
    
        //  validate order
        $orderId = $session['metadata']['order_id'] ?? null;
        $order = Order::findOrFail($orderId);

        //  if order isnt already finished, complete order
        if ($order->status == 'completed') return redirect()->route('home');
        $order->update(['status' => 'completed']);

        //  get cart
        $cart = Cart::where('order_id', $orderId)->first();

        //  get all tickets
        $tickets = CartTicket::where('cart_id', $cart->id)->join('tickets', 'ticket_id', '=', 'tickets.id')->get();    

        //  create ticket in user_tickets
        $user_tickets = array();
        for ($i = 0; $i<count($tickets); $i++) {
            $ticket = UserTicket::create([
                'user_id' => $cart->user_id,
                'ticket_id' => $tickets[$i]->ticket_id,
                'order_id' => $cart->order_id,
                'ticket_title' => $tickets[$i]->title,
                'ticket_key' => Str::uuid(),
            ]);
            array_push($user_tickets, $ticket);
        };

        //  update cart
        $cart->is_active = false;
        $cart->save();

        //  update sales for each cart item created, get sale, if sale dont exist create one
        $sales = array();
        foreach($user_tickets as $ticket) {
            $sale = Sale::where('ticket_id', $ticket->ticket_id)->first();

            if($sale == null) {
                $ticket_price = Ticket::find($ticket->ticket_id);
                $ticket_price = $ticket_price->price;
                $sale = new Sale(['ticket_id' => $ticket->ticket_id, 'ticket_title' => $ticket->ticket_title, 'ticket_price' => $ticket_price]);
                $sale->save();
            } else {
                $sale->ticket_sold += 1;
                $sale->save();
            }
            array_push($sales, $sale);
        };

        //  get all user_tickets
        $user_tickets = UserTicket::where('user_id', $cart->user_id);

        return Inertia::render('CheckoutSuccess', [ 'userTickets' => $user_tickets, 'sales' => $sales ]);
    }

    public function checkoutCancel(Request $request) {
        $sessionId = $request->get('session_id');
 
        if ($sessionId === null) {
            return;
        }
    
        $session = Cashier::stripe()->checkout->sessions->retrieve($sessionId);
    
        if ($session->payment_status !== 'unpaid') {
            return;
        }
    
        $orderId = $session['metadata']['order_id'] ?? null;

        $order = Order::findOrFail($orderId);

        $order->update(['status' => 'canceled']);
    
        return Inertia::render('CheckoutCancel', []);
    }
}
