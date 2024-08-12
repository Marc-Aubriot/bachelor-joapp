<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\TicketsController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use Inertia\Inertia;

Route::get('/', [WelcomeController::class, 'index'])->name('home');
Route::get('/billets', [TicketsController::class, 'index'])->name('tickets');
Route::post('/addtocart', [TicketsController::class, 'addTicketToCart']);
Route::get('/cart/{userid}', [CartController::class, 'index'])->name('cart');
Route::get('/cart/{userid}/checkout/{cartid}',  [CheckoutController::class, 'index'])->name('checkout');
Route::view('/checkout/success', 'checkout.success')->name('checkout-success');
Route::view('/checkout/cancel', 'checkout.cancel')->name('checkout-cancel');
Route::get('/checkout/success', [CheckoutController::class, 'checkoutSuccess'])->name('checkout-success');
Route::get('/checkout/cancel', [CheckoutController::class, 'checkoutCancel'])->name('checkout-cancel');
Route::get('/cgu', function() {return Inertia::render('CGU');})->name('cgu');
Route::get('/cgv', function() {return Inertia::render('CGV');})->name('cgv');
Route::get('/rgpd', function() {return Inertia::render('RGPD');})->name('rgpd');
Route::get('/legals', function() {return Inertia::render('Legals');})->name('legals');
