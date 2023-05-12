<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class BookReviewQuoteService
{
  public function getQuote()
  {
    // Credits: https://github.com/lukePeavey/quotable#get-random-quotes
    $response = Http::get('https://api.quotable.io/quotes/random');
    $jsonArray = json_decode($response, true);
    return $jsonArray[0]['content'];
  }
}