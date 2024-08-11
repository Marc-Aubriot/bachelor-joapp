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
use App\Models\Cart;
use App\Models\CartTicket;
use App\Models\Ticket;
use App\Models\Order;

Route::get('/', [WelcomeController::class, 'index'])->name('home');

Route::get('/billets', [TicketsController::class, 'index'])->name('tickets');
Route::post('/addtocart', [TicketsController::class, 'addTicketToCart']);
Route::get('/cart/{userid}', [CartController::class, 'index'])->name('cart');
Route::get('/paiement/{title}', [BuyingController::class, 'index'])->middleware('auth');
 
Route::get('/cart/{userid}/checkout/{cartid}', function (Request $request, string $userid,string $cartid) {
    $cart = Cart::where('user_id', $userid)->first();

    //  get all tickets and amount_paid for this cart
    $items = CartTicket::where('cart_id', $cartid)->get()->toArray();
    $line_items = array();
    $amount_paid = 0;

    //  prepare a list of items for stripe
    for ($i = 0; $i < count($items); $i++) {
        $ticket = Ticket::where('id', $items[$i]['ticket_id'])->first();
        $tickets_cost = $ticket['price'] * $items[$i]['quantity'];
        $amount_paid = $amount_paid + $tickets_cost;
        $item = array(
            'price' => $ticket['stripe_item_price'],
            'quantity' => $items[$i]['quantity'],
        );
        array_push($line_items, $item);
    }

    $order = Order::create([
        'cart_id' => $cart->id,
        'user_id' => $userid,
        'amount_paid' => $amount_paid,
        'status' => 'incomplete',
    ]);

    return $request->user()->checkout($line_items, [
        'success_url' => route('checkout-success').'?session_id={CHECKOUT_SESSION_ID}',
        'cancel_url' => route('checkout-cancel'),
        'metadata' => ['order_id' => $order->id],
    ]);
})->name('checkout');

// Route::get('/cart/{cart}/checkout', function (Request $request, String $itemlink, Cart $cart ) {
//     $stripePriceId = $itemlink;
//     $quantity = 1;
    
//     $order = Order::create([
//         'cart_id' => $cart->id,
//         'price_ids' => $cart->price_ids,
//         'status' => 'incomplete',
//     ]);

//     return $request->user()->checkout([$stripePriceId => $quantity], [
//         'success_url' => route('checkout-success').'?session_id={CHECKOUT_SESSION_ID}',
//         'cancel_url' => route('checkout-cancel'),
//         'metadata' => ['order_id' => $order->id],
//     ]);
// })->name('checkout');
 
Route::view('/checkout/success', 'checkout.success')->name('checkout-success');
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
 
    $orderId = $session['metadata']['order_id'] ?? null;
 
    $order = Order::findOrFail($orderId);
 
    $order->update(['status' => 'completed']);
 
    return Inertia::render('CheckoutSuccess', []);
})->name('checkout-success');

Route::get('/checkout/cancel', function (Request $request) {
    $sessionId = $request->get('session_id');
 
    if ($sessionId === null) {
        return;
    }
 
    $session = Cashier::stripe()->checkout->sessions->retrieve($sessionId);
 
    if ($session->payment_status !== 'paid') {
       return;
    }
 
    $orderId = $session['metadata']['order_id'] ?? null;
 
    $order = Order::findOrFail($orderId);
 
    $order->update(['status' => 'completed']);
 
    return Inertia::render('CheckoutCancel', []);
})->name('checkout-cancel');

/*Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});*/