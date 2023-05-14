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
        'image_path',
        'book_id',
        'user_id'
    ];

    /**
     * One Book Review belongs to one book.
     */
    public function book() {
        return $this->belongsTo(BookModel::class);
    }

    /**
     * One Book Review belongs to one User.
     */
    public function user() {
        return $this->belongsTo(User::class);
    }

    /**
     * One Book Review can have many upvotes.
     */
    public function bookReviewUpvotes()
    {
        return $this->hasMany(BookReviewUpvoteModel::class, 'review_id');
    }

    public function comments()
    {
        return $this->hasMany(BookReviewCommentModel::class, 'review_id');
    }
}
