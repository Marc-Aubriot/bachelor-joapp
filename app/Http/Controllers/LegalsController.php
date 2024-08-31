<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class LegalsController extends Controller
{
    public function cgu() {
        return Inertia::render('CGU');
    }

    public function cgv() {
        return Inertia::render('CGV');
    }

    public function rgpd() {
        return Inertia::render('RGPQ');
    }

    public function legals() {
        return Inertia::render('Legals');
    }
}
