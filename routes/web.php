<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\TicketsController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\QrCodeController;
use App\Http\Controllers\LegalsController;

Route::get('/', [WelcomeController::class, 'index'])->name('home');
Route::get('/billets', [TicketsController::class, 'index'])->name('tickets');
Route::post('/addtocart', [TicketsController::class, 'addTicketToCart']);
Route::get('/cart/{userid}', [CartController::class, 'index'])->name('cart');
Route::get('/cart/{userid}/checkout/{cartid}',  [CheckoutController::class, 'index'])->name('checkout');
Route::view('/checkout/success', 'checkout.success')->name('checkout-success');
Route::view('/checkout/cancel', 'checkout.cancel')->name('checkout-cancel');
Route::get('/checkout/success', [CheckoutController::class, 'checkoutSuccess'])->name('checkout-success');
Route::get('/checkout/cancel', [CheckoutController::class, 'checkoutCancel'])->name('checkout-cancel');
Route::get('/cgu', [LegalsController::class, 'cgu'])->name('cgu');
Route::get('/cgv', [LegalsController::class, 'cgv'])->name('cgv');
Route::get('/rgpd', [LegalsController::class, 'rgpd'])->name('rgpd');
Route::get('/legals', [LegalsController::class, 'legals'])->name('legals');
Route::get('/contact',  [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'sendContactForm'])->name('contact');
Route::get('/qrcode', [QrCodeController::class, 'show']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/{section}', [DashboardController::class, 'index'])->name('dashboard-ticket');
});
