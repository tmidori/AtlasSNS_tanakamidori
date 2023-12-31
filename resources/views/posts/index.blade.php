@extends('layouts.login')

@section('content')
<!--投稿フォーム-->
<div class="container">
  <img class="user-icon" src="images/icon1.png">
  {!! Form::open(['url' => 'post/create']) !!}
  <div class="post-form">
    {{Form::textarea('newPost', null, ['required','class' => 'post','placeholder' => '投稿内容を入力してください'])}}
    <button type="submit" class="btn btn-success pull-right"><img src="images/post.png" alt="送信"></button>
  </div>
  {!! Form::close() !!}
</div>

@endsection
