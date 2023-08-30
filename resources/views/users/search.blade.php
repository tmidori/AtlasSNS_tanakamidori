@extends('layouts.login')


@section('content')

<!-- 検索フォーム -->
  <form action="{{ url('/search') }}" method="GET">
    @csrf
    <input type="keyword" name="users" class="form-control" placeholder="ユーザー名">
    <button type="submit" class=""><img src="./images/search.png"></button>
  </form>

  <!--  -->



@endsection
