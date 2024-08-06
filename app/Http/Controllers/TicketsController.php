<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Ticket;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketsController extends Controller
{
    public function index()
    {   
        $tickets = Ticket::all();

        return Inertia::render('Tickets', [
            'ticketList' => $tickets
        ]);
    }

    public function addToCart(Request $request)
    {   
        $item_id = $request->item_id;
        $user = Auth::user();
        $user_id = $user->id;

        $new_cart = new Cart;
        $new_cart->user_id = ($user_id);
        $new_cart->item_id = ($item_id);
        $new_cart->save();
        $datas = Cart::find($new_cart->id);

        return $datas;
    }
}
