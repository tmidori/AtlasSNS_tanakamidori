@extends('layouts.login')


@section('content')

<!-- 検索フォーム -->
<form action="{{ url('/search') }}" method="GET">
  @csrf
  <input type="text" name="query" class="form-control" placeholder="ユーザー名">
  <button type="submit" class=""><img src="./images/search.png"></button>
</form>

<!-- 検索ワードを表示 -->
@if(!empty($keyword))
<P>検索ワード: {{ $keyword }}</P>
@endif

<!-- ユーザー一覧を表示 -->
<div class="container">
  @foreach ($users as $user)
  <p><img class="Item" src="images/{{ $user -> images }}"></p>
  <p>{{ $user -> username }}</p>
  @endforeach

  <!-- フォロー/解除ボタン -->


</div>



@endsection
