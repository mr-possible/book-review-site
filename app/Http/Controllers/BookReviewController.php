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
        $result = BookModel::with('reviews')->where('book_title', 'like', '%'.$query.'%')->first();

        if ($result) {
            $data = [
                'result' => $result,
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

    public function searchBookForSubmitReview(Request $request) {
        $query = $request->input('query');
        $results = BookModel::where('book_title', 'like', '%'.$query.'%')->get();
        if (count($results)) {
            $data = [
                'results' => $results,
                'message' => 'Results found for "'.$query.'".',
            ];
            return view('submitreviewpage', $data);
        } else {
            $data = [
                'message' => 'No results found for "'.$query.'".',
            ];
            return view('submitreviewpage', $data);
        }
    }

    public function storeUserReview(Request $request)
    {
        $validatedData = $request->validate([
            'book_id' => 'required|integer',
            'user_id' => 'required|integer',
            'review-title' => 'required|string|max:255',
            'review-rating' => 'required|integer|max:10',
            'review-body' => 'required|string',
        ]);

        BookReviewModel::create(
            [
                'book_id' => $validatedData['book_id'],
                'user_id' => $validatedData['user_id'],
                'book_review_title' => $validatedData['review-title'],
                'book_review_rating' => $validatedData['review-rating'],
                'book_review_body' => $validatedData['review-body'],
            ]
        );
        return redirect('/submitreview')->with('success', 'Your review has been submitted successfully!');
    }
}
