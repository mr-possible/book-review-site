<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookModel;
use App\Models\BookReviewModel;


class BookReviewController extends Controller
{
    public function index() {
        $book_review_titles = BookReviewModel::all()->pluck('book_review_title');
        $book_review_bodies = BookReviewModel::all()->pluck('book_review_body');
        return $book_review_bodies;
    }

    public function getBookReview($id) {
        $book = BookModel::find($id);
        $reviews = $book->reviews;
        return $reviews;
    }
}
