@extends('app')

@section('title', '記事一覧')

@section('content')

  <!-- 別のビューを読み込ます -->
  @include('nav')
  
  <div class="container">
  @foreach($articles as $article)
      @include('articles.card') 
    @endforeach {{--この行を追加--}}
  </div>
@endsection
