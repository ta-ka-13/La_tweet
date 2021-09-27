<?php

namespace App\Http\Controllers;

// 追加
use App\Article;

use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index()
    {
    // 追加
    $articles = Article::all()->sortByDesc('created_at');
    return view('articles.index', ['articles' => $articles]);
    }
}


