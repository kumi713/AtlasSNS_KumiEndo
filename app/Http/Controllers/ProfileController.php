<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;//登録ユーザーのDBを使用

class ProfileController extends Controller
{
    public function profile(){
        return view('profiles.profile');
    }
    //
    public function get_user($user_id){

        $user = User::with('following')->with('followed')->findOrFail($user_id);
        return response()->json($user);
    }
}
