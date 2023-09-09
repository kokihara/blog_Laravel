<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //テーブル名
    protected $table = 'blogs';

    //カラムの可変項目
    protected $fillable =
    [
        'title',
        'content'
    ];
}
