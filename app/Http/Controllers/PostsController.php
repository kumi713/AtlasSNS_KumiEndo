<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; // Postモデルをインポート
use App\Models\users;

class PostsController extends Controller
{
    //アクセス制限をかける
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
      $posts = Post::get(); //Postモデル（postsテーブル）からレコード情報を取得
      // 記事を新しい順に取得。
      $posts = Post::latest()->get();
      return view('posts/index',['posts'=>$posts]);
    }

    public function store(Request $request)
    {
      // 新しい Post を作成
      $post = new Post;
      // フォームから送られてきたデータをポストのカラムに入れる
      $post->user_id = $request->user_id;
      $post->post = $request->post;
      // データベースに保存
      $post->save();
      // indexページへ遷移

      return redirect('/top');
    }

}
