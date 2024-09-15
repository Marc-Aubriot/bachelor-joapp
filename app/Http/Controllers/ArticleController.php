<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Article;

class ArticleController extends Controller
{

    public function index(string $articleid) 
    {
        $article = Article::find($articleid);

        return Inertia::render('Article', [
            'article' => $article,
        ]);
    }
}
