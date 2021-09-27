<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// 追加
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
// 追加
// userメソッドの戻り値が、BelongsToクラス（型）であることを宣言しています。
    public function user(): BelongsTo
    {
        // $thisは、Articleクラスのインスタンス自身を指している
        // $this->メソッド名()とすることで、インスタンスが持つメソッドが実行され、
        // $this->プロパティ名とすることで、インスタンスが持つプロパティを参照します。
        return $this->belongsTo('App\User');
    }

    //
}