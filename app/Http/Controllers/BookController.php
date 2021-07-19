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

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request) //Request型をrequestで受け取る
    {
        $request->validate([ //投稿のバリデーション
            'title' => 'required|min:3', // 3文字以上
            'body' => 'required' // 空欄なし
        ],[
            'title.required' => 'タイトルは必須です', //エラーメッセージの指定
            'title.min' => ':min 文字以上入力してください',
            'body.required' => 'タイトルは必須です',
        ]);

        $book = new Book();
        $book->title = $request->title;
        $book->body = $request->body;
        $book->save();

        return redirect()
            ->route('books.index');
    }
}
