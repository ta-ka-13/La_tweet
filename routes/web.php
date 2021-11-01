<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// 追加
Auth::routes();

// /というURLにリクエスト(ブラウザなどからのアクセス)があったら、ArticleControllerのindexアクションメソッドを動かす、ということが定義されます。
Route::get('/', 'ArticleController@index')->name('articles.index');

// よく使われる機能のルーティングをひとまとめにしたメソッド
Route::resource('/articles', 'ArticleController')->except(['index','show'])->middleware('auth');

// groupメソッドを使うことで、それまでに定義した内容が、groupメソッドにクロージャ(無名関数)として渡した各ルーティングにまとめて適用される
Route::prefix('articles')->name('articles.')->group(function () {
  Route::put('/{article}/like', 'ArticleController@like')->name('like')->middleware('auth');
  Route::delete('/{article}/like', 'ArticleController@unlike')->name('unlike')->middleware('auth');
});

// showアクションメソッドに対してauthミドルウェアを使わないようにしている
Route::resource('/articles', 'ArticleController')->only(['show']);