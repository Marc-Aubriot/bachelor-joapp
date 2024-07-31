<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
//use App\Model\Ticket;

class TicketsController extends Controller
{
    public function index()
    {   
        //$tickets = Ticket::all();

        return Inertia::render('Tickets', [
            //'tickets' +> $tickets,
        ]);
    }
}
