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
Route::get('/','App\Http\Controllers\BlogController@showList')->name('blogs');

//ブログ詳細画面の表示
Route::get('/blog/{id}','App\Http\Controllers\BlogController@showDetail')->name('show');
