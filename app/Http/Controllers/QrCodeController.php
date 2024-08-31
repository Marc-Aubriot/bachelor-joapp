<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\UserTicket;
use App\Models\User;

class QrCodeController extends Controller
{
    public function show($ticket_id = null)
    {   
        $from = [255, 0, 0];
        $to = [0, 0, 255];

        if ($ticket_id == null) return QrCode::size(200)
            ->eye('circle')
            ->gradient($from[0], $from[1], $from[2], $to[0], $to[1], $to[2], 'diagonal')
            ->margin(1)
            ->generate(
                "hello you",
            );

        //  get user code
        $ticket = UserTicket::where('id', $ticket_id)->first();
        $user = User::where('id', $ticket->user_id)->first();
        $user_code = $user->accountkey;

        //  concatenate user code and ticket code then print qr code
        $ticket_code = $user_code.$ticket->ticket_key;

        return QrCode::size(200)
        ->eye('circle')
        ->gradient($from[0], $from[1], $from[2], $to[0], $to[1], $to[2], 'diagonal')
        ->margin(1)
        ->generate(
            $ticket_code,
        );
    }
}
