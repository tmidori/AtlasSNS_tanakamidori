<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //投稿表示
    public function index(Request $request){
        return view('posts/index');
    }

    //新規投稿
    public function added(Request $request){
        $id = $request->input('newPost');
        $user_id = $request->input('newPost');
        $post = $request->input('newPost');
        Post::create(['id','user_id','post' => $id, $user_id, $_post]);
        return back();
    }
}
