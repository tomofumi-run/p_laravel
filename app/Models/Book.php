<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
    ];

    // $book->comments
    public function comments() {
        return $this->hasMany(Comment::class); //bookに対してコメントは複数存在する
    }
}
