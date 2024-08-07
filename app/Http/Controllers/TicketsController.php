<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Ticket;
use App\Models\Cart;
use Illuminate\Http\Request;
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

        return Inertia::render('Tickets', [
            'ticketList' => $tickets
        ]);
    }

    /**
   * add one item to existing cart row, or create new cart row with user id and item id
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
    public function addTicketToCart(Request $request)
    {   
        $item_id = $request->item_id;
        $user = Auth::user();
        $user_id = $user->id;

        $new_cart = Cart::where('user_id', $user_id)->where('item_id', $item_id)->get();

        if (count($new_cart) >= 1) {
            $new_cart[0]->quantity = $new_cart[0]->quantity + 1;
            $new_cart[0]->save();
            return $new_cart;
        } else {
            $new_cart = new Cart;
            $new_cart->user_id = ($user_id);
            $new_cart->item_id = ($item_id);
            $new_cart->save();
            $datas = Cart::find($new_cart->id);
            return $datas;
        }
    }
}
