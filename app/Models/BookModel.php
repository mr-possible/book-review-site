<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookModel extends Model
{
    use HasFactory;

    protected $fillable=[
        'book_title',
        'book_author',
        'book_description',
        'book_isbn',
        'book_publisher',
        'book_pagecount',
        'book_language',
        'book_price'
    ];
}
