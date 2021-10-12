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
        $article->fill($request->all());
        $article->user_id = $request->user()->id;
        $article->save();
        return redirect()->route('articles.index');
    }

    // editアクション
    // $articleにはArticleモデルのインスタンスが代入された状態
    public function edit(Article $article)
    {
        // $articleという変数にArticleモデルのインスタンスが代入された状態
        return view('articles.edit', ['article' => $article]);
    }
}


