<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookReviewCommentModel extends Model
{
    use HasFactory;

    protected $fillable = ['review_id', 'user_id', 'comment'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function review()
    {
        return $this->belongsTo(BookReviewModel::class);
    }
}
