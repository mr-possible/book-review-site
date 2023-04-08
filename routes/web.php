<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookReviewController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [UserController::class, 'index']);

Route::get('/books', [BookController::class, 'index']);

Route::get('/books/{book_id}', [BookController::class, 'getBookInfo']);

Route::get('/bookreviews', [BookReviewController::class, 'index']);

Route::get('/bookreviews/{book_id}', [BookReviewController::class, 'getBookReview']);