<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use App\Models\UserTicket;
use App\Models\Ticket;
use App\Models\Order;
use App\Models\Cart;
use App\Models\CartTicket;

class DashboardController extends Controller
{
    public function index($section = null) {
        $user = Auth::user();
        $tickets = UserTicket::where('user_id', $user->id)->join('tickets', 'ticket_id', '=', 'tickets.id')->get();
        $orders = Order::where('user_id', $user->id)->get();

        foreach($tickets as $ticket) {
            $ticket['qrCode'] = Ticket::showQrCode($ticket->ticket_id);
        }

        $ticket_list = null;

        if ($user->id) {
            $cart = Cart::whereUserId($user->id)->where('is_active', true)->first();

            //  get a list of each items with corresponding ticket info to populate view
            if ($cart != null) {
                $ticket_list = CartTicket::where('cart_id', $cart->id)->join('tickets', 'ticket_id', '=', 'tickets.id')->get();
            }
        }

        return Inertia::render('Dashboard', [
            'tickets' => $tickets,
            'orders' => $orders,
            'section' => $section,
            'ticketlist' => $ticket_list,
        ]);
    }
}
