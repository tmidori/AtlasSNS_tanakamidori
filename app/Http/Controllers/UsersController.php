<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    //
    public function profile(){
        return view('users.profile');
    }

    //検索機能
    public function search(Request $request)
    {
        //$query = $request->input('query');
        //$keyword = $request->input('keyword');
        $keyword = $request->input('query');

        if(!empty($keyword)){
            $users = User::where('username','like','%'.$keyword.'%')->get();
        }else{
            $users = User::get();
            //whereは条件がある時 全てのデータを持ってきたいときはget
        }
        return view('users.search',['users' => $users , 'keyword' => $keyword]);
        //return view('フォルダ名.ファイル名',['送りたい値' => 送りたい変数])；
    }

   // ユーザー一覧の表示


}
