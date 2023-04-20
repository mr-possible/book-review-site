<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookModel;

class BookController extends Controller
{
    public function index() {
        $book_titles = BookModel::all()->pluck('book_title');
        return $book_titles;
    }

    public function getBookInfo($id) {
        $book = BookModel::find($id);
        if (!$book) {
            abort(404, 'Book not found');
        }
        return $book;
    }

    public function searchBook(Request $request) {
        $query = $request->input('query');
        $results = BookModel::where('book_title', 'like', '%'.$query.'%')->get();
        if (count($results)) {
            $data = [
                'results' => $results,
                'message' => 'Results found for "'.$query.'".',
            ];
            return view('searchbookpage', $data);
        } else {
            $data = [
                'message' => 'No results found for "'.$query.'".',
            ];
            return view('searchbookpage', $data);
        }
    }

}
