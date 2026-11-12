<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['post'];

    // belongsTo結合(主テーブル <- 従テーブル)リレーション
    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
