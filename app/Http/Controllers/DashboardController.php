<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use App\Models\UserTicket;

class DashboardController extends Controller
{
    public function index() {
        $user = Auth::user();
        $tickets = UserTicket::where('user_id', $user->id)->get();

        return Inertia::render('Dashboard', [
            'tickets' => $tickets,
        ]);
    }
}
