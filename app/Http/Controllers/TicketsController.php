<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class TicketsController extends Controller
{
    public function index()
    {   
        return Inertia::render('Tickets', [
            'assetsURL' => env("ASSETS_URL"),
        ]);
    }
}
