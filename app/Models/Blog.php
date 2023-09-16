<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    //factoryで使用できるようにする
    use HasFactory;

        protected static function newFactory()
    {
        return \Database\Factories\BlogFactory::new();
    }

    //テーブル名
    protected $table = 'blogs';

    //カラムの可変項目
    protected $fillable =
    [
        'title',
        'content'
    ];
}
