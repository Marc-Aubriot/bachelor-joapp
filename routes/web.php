<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\TicketsController;
use App\Http\Controllers\BuyingController;
use App\Http\Controllers\CartController;

Route::get('/', [WelcomeController::class, 'index']);
Route::get('/billets', [TicketsController::class, 'index']);
Route::get('/paiement/{title}', [BuyingController::class, 'index'])->middleware('auth');

Route::post('/addtocart/{item}', [CartController::class, 'addItem']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});