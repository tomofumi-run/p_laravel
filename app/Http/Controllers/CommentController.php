<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request, Book $book){
        $request->validate([
            'body' => 'required',
        ]);
        $comment = new Comment();
        $comment->book_id = $book->id;
        $comment->body = $request->body;
        $comment->save();

        return redirect()
            ->route('books.show', $book);
    }
}
