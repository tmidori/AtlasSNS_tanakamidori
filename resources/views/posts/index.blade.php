@extends('layouts.login')

@section('content')
<!-- <h2>機能を実装していきましょう。テスト</h2> -->
<div class="container">
  <img claas="user-icon" src="images/icon1.png">
  {!! Form::open(['url' => 'post/create']) !!}
  <div class="post-form">
    {{Form::textarea('newPost', null, ['required','class' => 'post','placeholder' => '投稿内容を入力してください'])}}
    <button type="submit" class=""><img src="images/post.png" alt="送信"></button>
  </div>
  {!! Form::close() !!}
</div>

@endsection
