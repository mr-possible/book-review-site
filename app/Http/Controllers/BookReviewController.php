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

    public function searchBook(Request $request) {
        $query = $request->input('query');
        $results = BookModel::with('reviews')->where('book_title', 'like', '%'.$query.'%')->get();
    
        if (count($results)) {
            $data = [
                'results' => $results,
                'message' => 'Results found for "'.$query.'".',
            ];
            return view('readreviewpage', $data);
        } else {
            $data = [
                'message' => 'No results found for "'.$query.'".',
            ];
            return view('readreviewpage', $data);
        }
    }
    
}
