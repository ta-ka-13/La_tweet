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

    // ダミーデータ
    // $articles = [
    //     (object) [
    //         'id' => 1,
    //         'title' => 'タイトル1',
    //         'body' => '本文1',
    //         'created_at' => now(),
    //         'user' => (object) [
    //             'id' => 1,
    //             'name' => 'ユーザー名1',
    //         ],
    //     ],
    // ];

    return view('articles.index', ['articles' => $articles]);
    }

    public function create()
    {
        return view('articles.create');    
    }
}


