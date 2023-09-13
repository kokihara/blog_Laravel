<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;


class BlogController extends Controller
{
    /**
     * ブログ一覧を表示する
     * @return view
     */
    public function showList()
    {
        $blogs = Blog::all();
        return view('blog.list', ['blogs' => $blogs]);
    }

    /**
     * ブログ詳細を表示する
     * @param  int $id
     * @return view
     */
    public function showDetail($id)
    {
        $blog = Blog::find($id);
        //該当のIDのデータがなかったらブログ一覧画面にリダイレクト
        if (is_null($blog)) {
            session()->flash('err_msg', 'データがありません'); //セッションを作成して、エラーメッセージを格納
            return redirect(route('blogs'));
        }
        return view('blog.detail', ['blog' => $blog]);
    }
}
