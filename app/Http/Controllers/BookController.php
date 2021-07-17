<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    { // web.phpにあったfunctionを移動させた
        $posts = [
            'Book A',
            'Book B',
            'Book C',
        ];
        return view('index')
            ->with(['books' => $posts]);
    }
}
