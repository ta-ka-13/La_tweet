@extends('app')

@section('title', '記事更新')

@include('nav')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card mt-3">
          <div class="card-body pt-0">
            @include('error_card_list')
            <div class="card-text">
            <!-- formタグのaction属性に記事更新処理のURLを指定している -->
            <!-- route関数の第二引数には、連想配列形式でルーティングのパラメーターを渡すことができる -->
              <form method="POST" action="{{ route('articles.update', ['article' => $article]) }}">
              <!-- Bladeで@method('PATCH')と記述するとBladeから生成されたHTMLではinputタグが埋め込まれる -->
                @method('PATCH')
                @include('articles.form')
                <button type="submit" class="btn btn-block" style="background-color:#FADD10;" >更新する</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
