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

    public function storeUserReview(Request $request) {
        $validatedData = $request->validate([
            'book_id' => 'required|integer',
            'user_id' => 'required|integer', 
            'review-title' => 'required|string|max:255',
            'review-rating' => 'required|integer|max:10',
            'review-body' => 'required|string',
        ]);
    
        $bookReview = new BookReviewModel();
        $bookReview->book_id = $validatedData['book_id'];
        $bookReview->user_id = $validatedData['user_id']; // 1 for now, work on this later. use the id of logged in user. it was $validatedData['user_id']
        $bookReview->book_review_rating = $validatedData['review-rating'];
        $bookReview->book_review_title = $validatedData['review-title'];
        $bookReview->book_review_body = $validatedData['review-body'];
        $bookReview->save();
        return redirect('/submitreview')->with('success', 'Your review has been submitted successfully!');
    }
    
}
