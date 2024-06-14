<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\User;

class PostsController extends Controller
{
    //投稿表示
    public function index(Request $request){
        return view('posts/index');
    }

    //新規投稿
    public function added(Request $request){
        $user_id = Auth::id(); //現在ログインしているユーザーのID取得
        $post = $request->input('newPost');
        Post::create(['user_id' => $user_id, 'post' => $post]);
        return back();
    }
}
