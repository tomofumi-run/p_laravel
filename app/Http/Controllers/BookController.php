<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    private $books = [
        'Title A',
        'Title B',
        'Title C',
    ];
    public function index()
    { // web.phpにあったfunctionを移動させた
        return view('index') // indexというアクションでルーティングと連携
            ->with(['books' => $this->books]); //privateなのでthisのposts
    }

    public function show($id)
    {
        return view('books.show')
            ->with(['book' => $this->books[$id]]);
    }
}
