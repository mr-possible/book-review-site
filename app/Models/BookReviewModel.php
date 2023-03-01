<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookReviewModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_review_title',
        'book_review_body',
        'book_review_rating',
        'book_id',
        'user_id',
        'book_review_date',
        'book_review_upvotes',
        'book_review_downvotes',
    ];
}
