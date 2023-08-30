@extends('layouts.login')

@section('content')

<form action="{{ url('/profile')}}" method="POST">
  <div class="form-update">
    <div class="">
      <label class="form-text" for="username">user name</label>
      <input class="form-input" type="text" value="" name="name" required>
    </div>
    <div class="">
      <label class="form-text" for="mail">mail address</label>
      <input class="form-input" type="text" value="" name="mail" required>
    </div>
    <div class="">
      <label class="form-text" for="password">password</label>
      <input class="form-input" type="password" value="" name="password" required>
    </div>
    <div class="">
      <label class="form-text" for="password">password confirm</label>
      <input class="form-input" type="password" value="" name="confirm" oninput="CheckPassword(this)" required>
    </div>
    <div class="">
      <label class="form-text" for="bio">bio</label>
      <textarea name="bio" id="bio"></textarea>
    </div>
    <div class="">
      <label class="form-text" for="image">icon image</label>
      <input class="form-input" type="file" name="images" id="fileImage">
    </div>
    <div class="btn-profileUpdate">
      <button class="btn btn-profileUpdate" type="submit">更新</button>
    </div>
  </div>
  @csrf

</form>

@endsection
