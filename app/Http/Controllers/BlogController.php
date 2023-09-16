<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Http\Requests\BlogRequest;
use Illuminate\Support\Facades\DB;



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

    /**
     * ブログ登録画面を表示する
     *
     * @return view
     */
    public function showCreate()
    {
        return view('blog.form');
    }

    /**
     * ブログを登録する
     *
     * @return view
     */
    public function exeStore(BlogRequest $request)
    {
        //ブログのリクエストを取得する
        $inputs = $request->all();

        //トランザクション開始
        DB::beginTransaction();

        //DB接続エラーアンドのエラーを検知
        try {
            //ブログを登録
            Blog::Create($inputs);
            DB::commit();
            session()->flash('err_msg', 'ブログを登録しました'); //ブログ登録後のメッセージを格納
            return redirect(route('blogs'));
        } catch (\Throwable $e) {
            DB::rollback();
            abort(500);
        }
    }
}
