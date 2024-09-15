<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Ticket;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\CartTicket;
use Illuminate\Support\Facades\Auth;

class TicketsController extends Controller
{
    /**
   * load Tickets
   * 
   * @return \Illuminate\Http\Inertia::render('Tickets' ['ticketlist' => $tickets])
   */
    public function index()
    {   
        $tickets = Ticket::all();

        $user = Auth::user();
        $userid = null;
        if ($user) $userid = $user->id;
        $ticket_list = null;

        if ($userid) {
            $cart = Cart::whereUserId($userid)->where('is_active', true)->first();

            //  get a list of each items with corresponding ticket info to populate view
            if ($cart != null) {
                $ticket_list = CartTicket::where('cart_id', $cart->id)->join('tickets', 'ticket_id', '=', 'tickets.id')->get();
            }
        }

        return Inertia::render('Tickets', [
            'tickets' => $tickets,
            'ticketlist' => $ticket_list,
        ]);
    }

    /**
   * create cart (table: 'carts') is does not exist, then add item to cart (table: 'cart_items') 
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
    public function addTicketToCart(Request $request)
    {   
        //  get the ticket by is stripe item price
        $stripe_item_price = $request->stripe_item_price;
        $ticket = Ticket::where('stripe_item_price', $stripe_item_price)->first();

        //  get the user
        $user = Auth::user();

        if ($user == null) return response([ 'message' => 'user not logged in']);

        $user_id = $user->id;

        //  get the cart
        $cart = Cart::where('user_id', $user_id)->where('is_active', true)->first();

        if ($cart != null) {
            //  if cart exist, check if item already exist in cart then add item to cart or update quantity
            $item = CartTicket::where('cart_id', $cart->id)->where('ticket_id', $ticket->id)->first();

            if ($item) {
                $item->quantity = $item->quantity + 1;
                $item->save();
                
                return response(
                    [
                        'cart'=> $cart, 
                        'cart_item'=> $item,
                        'ticket'=> $ticket,
                        'message' => 'cart updated',
                    ]
                );

            } else {
                $new_item = new CartTicket;
                $new_item->cart_id = $cart->id;
                $new_item->ticket_id = $ticket->id;
                $new_item->save();

                return response(
                    [
                        'cart'=> $cart, 
                        'cart_item'=> $new_item,
                        'ticket'=> $ticket,
                        'message' => 'cart updated',
                    ]
                );
            }

        } else {
            //  else create a new cart and add item to cart with defaut quantity 1
            $new_cart = new Cart;
            $new_cart->user_id = ($user_id);
            $new_cart->save();

            $new_item = new CartTicket;
            $new_item->cart_id = $new_cart->id;
            $new_item->ticket_id = $ticket->id;
            $new_item->save();

            return response(
                [
                    'cart'=> $cart, 
                    'cart_item'=> $new_item,
                    'ticket'=> $ticket,
                    'message' => 'cart created',
                ]
            );
        }
    }
}
