<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController; //namespace部分
use App\Http\Controllers\CommentController;

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
    ->name('books.create');

Route::post('/books/store',[BookController::class, 'store'] )
    ->name('books.store');

Route::get('/books/{book}/edit',[BookController::class, 'edit'] )
    ->name('books.edit')
    ->where('book', '[0-9]+');

Route::patch('/books/{book}/update',[BookController::class, 'update'] )
    ->name('books.update')
    ->where('book', '[0-9]+');

Route::delete('/books/{book}/destroy',[BookController::class, 'destroy'])
    ->name('books.destroy')
    ->where('book', '[0-9]+');

Route::post('/books/{book}/comments',[CommentController::class, 'store'])
    ->name('comments.store')
    ->where('comment', '[0-9]+');

Route::delete('/comments/{comment}/destroy',[CommentController::class, 'destroy'])
    ->name('comments.destroy')
    ->where('comment', '[0-9]+');
