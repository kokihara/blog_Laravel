<?php

use Illuminate\Support\Facades\Route;

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

//ブログ一覧画面の表示
Route::get('/', 'App\Http\Controllers\BlogController@showList')->name('blogs');

//ブログ登録画面の表示
Route::get('/blog/create', 'App\Http\Controllers\BlogController@showCreate')->name('create');

//ブログ登録
Route::post('/blog/store', 'App\Http\Controllers\BlogController@exeStore')->name('store');

//ブログ詳細画面の表示
Route::get('/blog/{id}', 'App\Http\Controllers\BlogController@showDetail')->name('show');

//ブログ編集画面の表示
Route::get('/blog/edit/{id}', 'App\Http\Controllers\BlogController@showEdit')->name('edit');

//ブログ内容更新
Route::post('/blog/update', 'App\Http\Controllers\BlogController@exeUpdate')->name('update');
