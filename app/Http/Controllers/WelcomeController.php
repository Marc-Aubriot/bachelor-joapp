<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
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
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,
            'assetsURL' => env("ASSETS_URL"),
            'articleList' => $articles,
            'imgList' => $banner_photos,
        ]);
    }
}
