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