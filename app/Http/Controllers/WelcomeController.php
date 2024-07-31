<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Models\Article;
use App\Models\BannerPhoto;

class WelcomeController extends Controller
{
    public function index()
    {   
        $articles = Article::all();
        $banner_photos = BannerPhoto::all();

        return Inertia::render('Welcome', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'articleList' => $articles,
            'imgList' => $banner_photos,
        ]);
    }
}
