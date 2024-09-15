<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Models\Article;
use App\Models\BannerPhoto;
use App\Models\Cart;
use App\Models\CartTicket;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    public function index()
    {   
        $articles = Article::all();
        $banner_photos = BannerPhoto::all();

        $user = Auth::user();
        $userid = null;
        if ($user) $userid = $user->id;
        $ticket_list = null;

        if ($userid) {
            $cart = Cart::whereUserId($userid)->where('is_active', true)->first();

            //  get a list of each items with corresponding ticket info to populate view
            if ($cart != null) {
                $ticket_list = CartTicket::where('cart_id', $cart->id)->join('tickets', 'ticket_id', '=', 'tickets.id')->get();
            }
        }

        return Inertia::render('Welcome', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'articleList' => $articles,
            'imgList' => $banner_photos,
            'ticketlist' => $ticket_list,
        ]);
    }
}
