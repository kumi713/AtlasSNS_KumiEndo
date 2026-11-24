<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Follow;//Followモデルをインポート

class FollowsController extends Controller
{

    public function followList(){
        return view('follows.followList');
    }
    public function followerList(){
        return view('follows.followerList');
    }
        //フォローする(中間テーブルをインサート)
    public function following(Request $request,$id){

        //自分がフォローしているかどうか検索
        $check = Follow::where('following_id', Auth::id())->where('followed_id', $request->user_id);

        //検索結果が0(まだフォローしていない)場合のみフォローする
        if($check->count() == 0):
            $follow = new Follow;
            $follow->following_id = Auth::id();
            $follow->followed_id = $id;
            $follow->save();
        endif;
        // 保存後に元の画面へ戻る
        return back();
    }
}