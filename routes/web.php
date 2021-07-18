<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController; //namespace部分

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[BookController::class, 'index'] )
    ->name('books.index'); // ルーティングに名前をつける。viewでリンク先を指定できる。

Route::get('/books/{book}',[BookController::class, 'show'] ) //ルーティングを変更することでImplicit Bindingが行える。
    ->name('books.show')
    ->where('book', '[0-9]+'); //0~9の数値しか受け付けない

Route::get('/books/create',[BookController::class, 'create'] ) //where文で0-9以外の文字列の場合に発火する
    ->name('books.');
