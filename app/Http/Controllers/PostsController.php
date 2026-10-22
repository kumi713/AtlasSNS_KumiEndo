<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; // Postモデルをインポート

class PostsController extends Controller
{
    //アクセス制限をかける
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('posts.index');

        // 1. データベースから投稿一覧を「新着順」で取得する
        // ※ userリレーション（投稿者情報）も一緒に読み込んでおきます
        $posts = Post::with('user')->orderBy('created_at', 'desc')->get();

        // 2. viewに渡す（第2引数のcompactでBlade側へ変数を送ります）
        return view('index', compact('posts')); 
    }

}
