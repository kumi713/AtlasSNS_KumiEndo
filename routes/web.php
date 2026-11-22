<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FollowController;//追加

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



require __DIR__ . '/auth.php';

// トップページに行く
Route::get('top', [PostsController::class, 'index']);
Route::post('top', [PostsController::class, 'store'])->name('posts.store');

Route::get('profile', [ProfileController::class, 'profile']);

Route::get('search', [UsersController::class, 'index'])->name('users.search');

Route::get('follow-list', [PostsController::class, 'followList'])->name('follows.followList');
Route::get('follower-list', [PostsController::class, 'followerList'])->name('follows.followerList');

//プロフィール閲覧で使用するユーザー情報の取得
Route::get('/profile/{id}',[ProfileController::class,'get_user']);

//フォロー状態の確認
Route::get('/follow/status/{id}',[FollowController::class,'check_following']);

//フォロー付与
Route::post('/follow/add',[FollowController::class,'following']);

//フォロー解除
Route::post('/follow/remove',[FollowController::class,'unfollowing']);