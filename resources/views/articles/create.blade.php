@extends('app')

@section('title', '記事投稿')

@include('nav')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card mt-3">
          <div class="card-body pt-0">
            @include('error_card_list')
            <div class="card-text">
              <form method="POST" action="{{ route('articles.store') }}">
                @include('articles.form')
                <!-- <input id="image" type="file" name="image" > -->
                <div class="form-group">
                  <label for="inputFile">写真</label>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="inputFile">
                  <label class="custom-file-label" for="inputFile" data-browse="参照">写真を選択</label>
                </div>
                
                <button type="submit" class="btn "style="background-color:#FADD10;" btn-block>投稿する</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
