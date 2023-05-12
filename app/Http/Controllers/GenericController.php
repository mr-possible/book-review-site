<?php

namespace App\Http\Controllers;
use App\Services\BookReviewQuoteService;

class GenericController extends Controller
{
    public function greet(BookReviewQuoteService $quoteService)
    {
        $quote = $quoteService->getQuote();
        return view('welcome', compact('quote'));
    }
}
