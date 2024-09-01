<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserTicket;

class AdminController extends Controller
{
    public function ticketScanner() {
        return view('admin/ticket_scanner');
    }

    public function getClientInfos(Request $request, $ticketCode = null) {

        $ticket_code = $request->input("ticketcode");

        //  split ticket code to get client code
        $client_code = substr($ticket_code, 0, 36);
        $client_datas = User::where('accountkey', $client_code)->first();

        //  get ticket datas
        $ticket_code = substr($ticket_code, 36, strlen($ticket_code));
        $ticket = UserTicket::where('ticket_key', $ticket_code)->first();

        //  return info as json
        if ($request) return response()->json(
            [ 
                "client_datas" => $client_datas, 
                "ticket_datas" => $ticket 
            ]
        );
        else return response()->json([ "response" => "no data sent" ]);
    }

    public function validateTicket(Request $request) {

        $ticket_id = $request->input("ticket_id");

        //  validate ticket
        $ticket = UserTicket::find($ticket_id);

        if (!$ticket) return response()->json([ "response" => "aucun ticket avec cet id" ]);

        //  ajoute une date
        $date= new \DateTime('today');
        $date->format('Y-m-d H:i:s');
        $ticket->date_used = $date;
        $ticket->save();

        //  return info as json
        if ($request) return response()->json(
            [ 
                "response" => "billet validé"
            ]
        );
        else return response()->json([ "response" => "no data sent" ]);
    }
}
