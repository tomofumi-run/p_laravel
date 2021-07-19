<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book; //MySQLからのデータを受け取るためのネームスペース
use App\Http\Requests\BookRequest;

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

    public function store(BookRequest $request) //Request型をrequestで受け取る
    {
        $book = new Book();
        $book->title = $request->title;
        $book->body = $request->body;
        $book->save();

        return redirect()
            ->route('books.index');
    }

    public function edit(Book $book) //指定されたidに対応
    {
        // $book = Book::findOrFail($id); //Errorページへの遷移も行う
        return view('books.edit')
            ->with(['book' => $book]);
    }

    public function update(BookRequest $request, Book $book)
    {
        $book->title = $request->title;
        $book->body = $request->body;
        $book->save();

        return redirect()
            ->route('books.show', $book);
    }

    public function destroy(Book $book) {
        $book->delete();

        return redirect()
            ->route('books.index');
    }
}
