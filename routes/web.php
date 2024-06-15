<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();

//POST→ユーザーが見える処理（表示するなど）
//GET→ユーザーが見えない処理（取得するなど）

//ログアウト中のページ
Route::get('/login', 'Auth\LoginController@login');
Route::post('/login', 'Auth\LoginController@login');

Route::get('/logout', 'Auth\LoginController@logout');
Route::post('/logout', 'Auth\LoginController@logout');

//新規登録
Route::get('/register', 'Auth\RegisterController@register');
Route::post('/register', 'Auth\RegisterController@register');

Route::get('/added', 'Auth\RegisterController@added');
Route::post('/added', 'Auth\RegisterController@added');

//ログイン中のページ
//Auth::route();
Route::middleware(['auth'])->group(function(){
  Route::get('/top','PostsController@index');
  Route::get('/profile','UsersController@profile');
});

//検索画面
Route::get('/search','UsersController@search');

//新規投稿
Route::get('/post','UsersController@index');
Route::post('/post/index','PostsController@added');

Route::get('/follow-list','PostsController@index');
Route::get('/follower-list','PostsController@index');


// Route::get('/', function () {
//   return view('auth/login');
// })->name('login');
