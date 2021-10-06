<?php

namespace App\Http\Controllers;

// 追加
use App\Article;

// 追加
use App\Http\Requests\ArticleRequest;

use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index()
    {
    // 追加
    $articles = Article::all()->sortByDesc('created_at');

    return view('articles.index', ['articles' => $articles]);
    }

    // createアクション
    public function create()
    {
        return view('articles.create');    
    }

    // storesアクション
    public function store(ArticleRequest $request, Article $article)
    {
        $article->title = $request->title;
        $article->body = $request->body;
        $article->user_id = $request->user()->id;
        $article->save();
        return redirect()->route('articles.index');
    }
}


