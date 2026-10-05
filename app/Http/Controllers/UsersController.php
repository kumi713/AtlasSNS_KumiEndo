<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //auth認証」を適用させた
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function search(){
        return view('users.search');
    }
}
public function create(Request $request)
    {
        //バリデーションを設定
        $request->validate([
                'UserName' => 'required|min:2|max:12',
                'Email' => 'required|min:5|max:40|unique|email', // メールアドレスの形式を確認
                'Password' => 'required|min:8|max:20|regex:/^[a-zA-Z0-9]*$/', // パスワードの長さを確認
                'PasswordConfirm' => 'required|Password'
        ]);
    }
