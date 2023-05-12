<?php

namespace App\Providers;

use App\Services\BookReviewQuoteService;
use Illuminate\Support\ServiceProvider;

class QuoteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(BookReviewQuoteService::class, function ($app) {
            return new BookReviewQuoteService();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}