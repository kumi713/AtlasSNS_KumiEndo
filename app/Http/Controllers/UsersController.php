<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; // Postモデルをインポート
use App\Models\User;

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
    public function index()
    {
        $users = User::all(); //Userモデル（usersテーブル）からレコード情報を取得
        return view('users.search',['users'=>$users]);
    }

}