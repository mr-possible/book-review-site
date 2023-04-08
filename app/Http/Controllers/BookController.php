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
}
