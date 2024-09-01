<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use App\Models\UserTicket;
use App\Models\Ticket;

class DashboardController extends Controller
{
    public function index($section = null) {
        $user = Auth::user();
        $tickets = UserTicket::where('user_id', $user->id)->join('tickets', 'ticket_id', '=', 'tickets.id')->get();

        foreach($tickets as $ticket) {
            $ticket['qrCode'] = Ticket::showQrCode($ticket->ticket_id);
        }

        return Inertia::render('Dashboard', [
            'tickets' => $tickets,
            'section' => $section,
        ]);
    }
}
