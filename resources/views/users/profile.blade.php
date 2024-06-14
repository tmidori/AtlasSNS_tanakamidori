@extends('layouts.login')

@section('content')

<form action="{{ url('/profile')}}" method="POST">
  <div class="form-profile">
    <p><img class="Item" src="images/icon1.png"></p>
    <div class="pr-block">
      <label class="form-text" for="username">user name</label>
      <input class="form-input" type="text" value="{{Auth::user()->username}}" name="name" required>
    </div>
    <div class="pr-block">
      <label class="form-text" for="mail">mail address</label>
      <input class="form-input" type="text" value="{{Auth::user()->mail}}" name="mail" required>
    </div>
    <div class="pr-block">
      <label class="form-text" for="password">password</label>
      <input class="form-input" type="password" value="{{Auth::user()->password}}" name="password" required>
    </div>
    <div class="pr-block">
      <label class="form-text" for="password">password confirm</label>
      <input class="form-input" type="password" value="" name="confirm" oninput="CheckPassword(this)" required>
    </div>
    <div class="pr-block">
      <label class="form-text" for="bio">bio</label>
      <textarea name="bio" id="bio"></textarea>
    </div>
    <div class="pr-block">
      <label class="form-text" for="image">icon image</label>
      <input class="form-input" type="file" name="images" id="fileImage">
    </div>
    <div class="btn-profileUpdate">
      <button class="btn btn-profileUpdate" type="submit">更新</button>
    </div>
  </>
  @csrf

</form>

@endsection
