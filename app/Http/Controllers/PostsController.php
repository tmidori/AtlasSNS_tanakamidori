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
        $posts = Post::where('user_id', Auth::id())->get(); //①
        return view('posts/index',['posts'=>$posts]);
    }

    //新規投稿
    public function added(Request $request){
        $user_id = Auth::id(); //現在ログインしているユーザーのID取得
        $post = $request->input('newPost'); //投稿内容を受け取る
        Post::create(['user_id' => $user_id, 'post' => $post]);
        return back();
    }

    //削除
    public function delete($id)
    {
        $posts = Post::Where('id',$id)->delete();
        return redirect('/top');
    }
}

//①　参考redmine：#2817
//「$list」はどこから出てきたいのか
//新出。投稿内容のデータを今後「$list」として使っていくために定義している。好きな名前でOK。
