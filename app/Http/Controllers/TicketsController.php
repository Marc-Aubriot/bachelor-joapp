<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Ticket;

class TicketsController extends Controller
{
    public function index()
    {   
        $tickets = Ticket::all();

        return Inertia::render('Tickets', [
            'ticketList' => $tickets
        ]);
    }
}
