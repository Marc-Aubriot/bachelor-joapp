<?php

namespace App\Http\Controllers\Admin;


class AdminController extends Controller
{
    public function ticketScanner() {
        return view('admin/ticket_scanner');
    }

    public function getClientInfos($ticketCode) {
        //  split ticket code to get client code
        //  get client infos
        //  return info as json
    }

    public function validateTicket($ticketCode) {
        //  validate ticket
        //  return confirmation
    }
}
