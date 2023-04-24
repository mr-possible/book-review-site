<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookReviewUpvoteModel extends Model
{
    use HasFactory;

    public function bookReview()
    {
        return $this->belongsTo(BookReviewModel::class);
    }
}
