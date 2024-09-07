<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\CartTicket;
use App\Models\Ticket;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{   

    /**
   * load Cart view, load user cart, items, and tickets
   *
   * @return \Illuminate\Http\Response
   */
    public function index(string $userid) {

        $cart = Cart::whereUserId($userid)->where('is_active', true)->first();

        //  get a list of each items with corresponding ticket info to populate view
        $ticket_list = null;
        $ticket_types = null;

        if ($cart != null) {
            $ticket_list = CartTicket::where('cart_id', $cart->id)->join('tickets', 'ticket_id', '=', 'tickets.id')->get();
            $ticket_ids = CartTicket::where('cart_id', $cart->id)->get();
            $ticket_ids = $ticket_ids->pluck('id')->toArray();
        }

        return Inertia::render('Cart', [
            'cart' => $cart,
            'ticketlist' => $ticket_list,
            'ticketsids' => $ticket_ids,
        ]);

    }

    /**
   * Add item to cart
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
    public function addItem(int $item) {
        $cart = new Cart;

        // Retrieve the currently authenticated user...
        $user = Auth::user();

        $cart->user_id = $user->id;
        $cart->item_id = $item;
        $cart->save();

        return response(
            [
                'message' => 'success',
                'cart' => $cart,
                'status' => 201
            ]
        );
    }

    public function update(Request $request, int $ticketid) {
        $method = $request["method"];
        $ticket = CartTicket::find($ticketid);
        if ($ticket) {
            if ($method == 'add') $ticket->quantity = $ticket->quantity + 1;
            else $ticket->quantity = $ticket->quantity - 1;
            $ticket->save();

            return response(['message' => 'success','ticket' => $ticket,]);
        } else {
            return response(['message' => 'error']);
        }
        
    }

    public function delete(int $ticketid) {
        $ticket = CartTicket::find($ticketid);
        if ($ticket) {
            $ticket->delete();
            return response(['message' => 'success',]);
        } else {
            return response(['message' => 'error',]);
        }
    }
}
