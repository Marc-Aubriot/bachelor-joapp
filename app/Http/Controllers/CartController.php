<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Ticket;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{   

    /**
   * load Cart view, ticket list and quantity
   *
   * @return \Illuminate\Http\Response
   */
    public function index(string $userid) {

        $cart = Cart::whereUserId($userid)->get();

        $ticket_list = array();

        for ( $i=0; $i<count($cart); $i++) {
            $ticket = Ticket::where("stripe_item_price", $cart[$i]->item_id)->get();
            $ticket_qtt = array($ticket[0], $cart[$i]->quantity);
            array_push($ticket_list, $ticket_qtt);
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
