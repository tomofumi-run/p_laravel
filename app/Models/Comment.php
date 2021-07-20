<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [ // 登録更新するカラムを設定する
        'book_id',
        'body',
    ];

    // $comment->book
    public function book() {
        return $this->belongsTo(Book::class);
    }
}
