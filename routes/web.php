<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookReviewController;

//Middleware group for Non- Authenticated user (Guest).
Route::group(
    ['middleware' => 'guest'], function() {
        Route::get('/login', [AuthController::class, 'loginform'])-> name('login');
        Route::post('/user-login', [AuthController::class, 'login'])-> name('user-login')->middleware('throttle:2,1');
        Route::get('/register', [AuthController::class, 'registerform'])-> name('register');
        Route::post('/user-register', [AuthController::class, 'register'])-> name('user-register')->middleware('throttle:2,1');
        Route::get('/', function () {
            return view('welcome');
        });
    }
);

//Middleware group for Authenticated user.
Route::group(
    ['middleware' => 'auth'], function() {
        Route::get('/home', [AuthController::class, 'home'])-> name('home');
        Route::get('/my-profile', [UserController::class, 'my_profile'])-> name('my-profile');
        Route::get('/profile/{user_id}', [UserController::class, 'others_profile'])->name('other-profile');
        Route::get('/logout', [AuthController::class, 'logout'])-> name('logout');
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
    }
);