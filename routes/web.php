<?php

use Illuminate\Http\Request;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\TicketsController;
use App\Http\Controllers\BuyingController;
use App\Http\Controllers\CartController;
use Laravel\Cashier\Cashier;

Route::get('/', [WelcomeController::class, 'index']);
Route::get('/billets', [TicketsController::class, 'index']);
Route::get('/paiement/{title}', [BuyingController::class, 'index'])->middleware('auth');

 
Route::get('/checkout', function (Request $request) {
    $stripePriceId = 'price_1PkAikRtjtpXYIzjKnnFdh0W';
 
    $quantity = 1;
 
    return $request->user()->checkout([$stripePriceId => $quantity], [
        'success_url' => route('checkout-success'),
        'cancel_url' => route('checkout-cancel'),
    ]);
})->name('checkout');
 
Route::view('/checkout/success', 'checkout.success')->name('checkout-sucess');
Route::view('/checkout/cancel', 'checkout.cancel')->name('checkout-cancel');
 
Route::get('/checkout/success', function (Request $request) {
    $sessionId = $request->get('session_id');
 
    if ($sessionId === null) {
        return;
    }
 
    $session = Cashier::stripe()->checkout->sessions->retrieve($sessionId);
 
    if ($session->payment_status !== 'paid') {
        return;
    }
 
    // $orderId = $session['metadata']['order_id'] ?? null;
 
    // $order = Order::findOrFail($orderId);
 
    // $order->update(['status' => 'completed']);
 
    return Inertia::render('CheckoutSuccess', []);
    //return view('checkout-success');
})->name('checkout-success');

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