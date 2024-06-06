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

    public function search(Request $request)
    {
        $query = $request->input('query');
        $keyword = $request->input('keyword');

        if(!empty($keyword)){
            $users = User::where('username','like','%'.$keyword.'%')->get();

        }else{

            $users = User::get();
            //whereは条件がある時 全てのデータを持ってきたいときはget

        }
        return view('users.search',['users' => $users , 'keyword' => $keyword]);
        //return view('フォルダ名.ファイル名',['送りたい値' => 送りたい変数])；
    }

}
