<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\BookReviewModel;
use App\Models\BookReviewUpvoteModel;

class UpvoteComponent extends Component
{
    public function render() {
        return view('livewire.upvote-component');
    }
    
    public $review, $user_id;
    
    public function mount($review, $user_id) {
        $this->review = $review;
        $this->user_id = $user_id;
    }

    public function upvote($review_id, $user_id) {
        $review = BookReviewModel::find($review_id);
        // Check if the user has already upvoted 
        $existingUpvote = BookReviewUpvoteModel::where('user_id', $user_id)
                                ->where('review_id', $review_id)
                                ->first();
        if ($existingUpvote) {
            // If the user has already upvoted, update the existing row - DO NOTHING FOR NOW
        } else {
            BookReviewUpvoteModel::create([
                'user_id' => $user_id,
                'review_id' => $review_id,
                'upvotes' => 1,
            ]);
        }
        $this->review = $review->fresh();
    }

    public function getNumberOfUpvotes($reviewId) {
        /**
         * this joins two tables - book_review_models & book_review_upvotes and gives upvote count
         * for each review_id
        */
        $reviewWithUpvoteCount = DB::table('book_review_models')
            ->select('book_review_models.*', DB::raw('COUNT(book_review_upvotes.id) as upvote_count'))
            ->leftJoin('book_review_upvotes', 'book_review_upvotes.review_id', '=', 'book_review_models.id')
            ->where('book_review_models.id', $reviewId)
            ->groupBy('book_review_models.id')
            ->first();
        return $reviewWithUpvoteCount;
    }
}