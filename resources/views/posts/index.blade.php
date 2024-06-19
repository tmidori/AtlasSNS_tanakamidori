@extends('layouts.login')

@section('content')
<!--投稿フォーム-->
<div class="container">
  <img class="user-icon" src="images/{{Auth::user()->images}}">
  {!! Form::open(['url' => 'post/index']) !!}
  <div class="post-form">
    {!! Form::textarea('newPost', null, ['required','class' => 'post','placeholder' => '投稿内容を入力してください']) !!}
    <button type="submit" class="btn btn-success pull-right"><img src="images/post.png" alt="送信"></button>
  </div>
  {!! Form::close() !!}

  <!--投稿表示-->
  <div class = >
    <p><img class="user-icon" src="images/{{Auth::user()->images}}">{{Auth::user() -> username}}</p>
    @foreach($post as $post) <!-- 右と左の$postは全く別物！！
               |      |-> @foreachで処理後のやつ
               |-> controllerの表示で定義したやつ　-->
    <tr>
      <td>{{ $post->post }}</td>
      <td>{{ $post->created_at }}</td>
      <!-- ↑ はforeach処理後の定義名 -->
    </tr>
    @endforeach

  </div>

</div>

<!-- フォロワーリスト -->

@endsection
