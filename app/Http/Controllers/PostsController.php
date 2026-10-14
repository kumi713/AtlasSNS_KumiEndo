<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //アクセス制限をかける
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('posts.index');
    }
}
