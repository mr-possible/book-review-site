<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookReviewController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/searchbook', function () {
    return view('searchbookpage');
});

Route::get('/readreview', function () {
    return view('readreviewpage');
});

Route::get('/submitreview', function () {
    return view('submitreviewpage');
});

//UserController - Related Endpoints
Route::get('/users', [UserController::class, 'index']);

//BookController - Related Endpoints
Route::get('/books', [BookController::class, 'index']);
Route::get('/books/{book_id}', [BookController::class, 'getBookInfo']);
Route::post('/search', [BookController::class, 'searchBook']);

//BookReviewController - Related Endpoints
Route::get('/bookreviews', [BookReviewController::class, 'index']);
Route::get('/bookreviews/{book_id}', [BookReviewController::class, 'getBookReview']);
Route::post('/readreview', [BookReviewController::class, 'searchBook']);
Route::match(['get', 'post'], '/searchbookForReview', [BookReviewController::class, 'searchBookForSubmitReview']);
Route::post('/store-review', [BookReviewController::class, 'storeUserReview']);

