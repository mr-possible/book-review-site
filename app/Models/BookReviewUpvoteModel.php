<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookReviewUpvoteModel extends Model
{
    use HasFactory;
    protected $table = 'book_review_upvotes';
    protected $fillable = ['user_id', 'review_id', 'upvotes'];

    public function bookReview()
    {
        return $this->belongsTo(BookReviewModel::class);
    }
}
