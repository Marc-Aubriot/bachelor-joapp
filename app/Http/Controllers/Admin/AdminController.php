<?php

namespace App\Http\Controllers\Admin;


class AdminController extends Controller
{
    public function ticketScanner() {
        return view('admin/ticket_scanner');
    }
}
