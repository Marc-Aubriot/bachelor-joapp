<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\CartTicket;
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

        if ($cart != null) {
            $ticket_list = CartTicket::where('cart_id', $cart->id)->join('tickets', 'ticket_id', '=', 'tickets.id')->get();
        }

        return Inertia::render('Cart', [
            'cart' => $cart,
            'ticketlist' => $ticket_list,
        ]);

    }

    /**
   * Add item to cart
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
    public function addItem(Request $request, int $item) {
        echo $item;

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
}
