<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\CRUD.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix' => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace' => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('ticket', 'TicketCrudController');
    Route::crud('user', 'UserCrudController');
    Route::crud('article', 'ArticleCrudController');
    Route::crud('banner-photo', 'BannerPhotoCrudController');
    Route::crud('cart-ticket', 'CartTicketCrudController');
    Route::crud('order', 'OrderCrudController');
    Route::crud('order-cart', 'OrderCartCrudController');
    Route::crud('user-ticket', 'UserTicketCrudController');
    Route::crud('contact', 'ContactCrudController');
    Route::get('ticket-scanner', [AdminController::class, 'ticketScanner'])->name('qrcode');
    Route::post('ticket-scanner', [AdminController::class, 'getClientInfos'])->name('qrcode.scan');
    Route::post('ticket-scanner/validate', [AdminController::class, 'validateTicket'])->name('qrcode.scan.validate');
}); // this should be the absolute last line of this file

/**
 * DO NOT ADD ANYTHING HERE.
 */
