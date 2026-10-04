<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
   use Illuminate\Support\Facades\Hash; // ここでHashをインポート
   use App\Models\User; // Userモデルをインポート


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
                'username' => 'ユーザー名',
                'email' => 'メールアドレス@example.com',
                'password' => Hash::make('パスワード'), // ハッシュ化処理
            ]);
    }
}
