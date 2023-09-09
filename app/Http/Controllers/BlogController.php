<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * blog一覧を表示する
     *
     * @return view
     */
    public function showList()
    {
        return view('blog.list');
    }
}
