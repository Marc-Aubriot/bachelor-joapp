<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{   

    /**
   * load Cart view
   *
   * @return \Illuminate\Http\Response
   */
    public function index(string $userid) {

        $cart = Cart::whereUserId($userid)->get();

        return Inertia::render('Cart', [
            'cart' => $cart
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
