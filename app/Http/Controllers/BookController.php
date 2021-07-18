<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book; //MySQLからのデータを受け取るためのネームスペース

class BookController extends Controller
{

    public function index()
    { // web.phpにあったfunctionを移動させた
        // $books = Book::orderBy('created_at', 'desc')->get();
        $books = Book::latest()->get(); //上と同じ
        return view('index') // indexというアクションでルーティングと連携
            ->with(['books' => $books]); //privateなのでthisのposts
    }

    public function show(Book $book) //指定されたidに対応
    {
        // $book = Book::findOrFail($id); //Errorページへの遷移も行う
        return view('books.show')
            ->with(['book' => $book]);
    }
}
