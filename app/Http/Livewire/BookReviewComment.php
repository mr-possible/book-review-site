<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BookReviewComment extends Component
{
    public function render()
    {
        return view('livewire.book-review-comment');
    }

    public $result;

    public function mount($review) {
        $this->review = $review;
    }
}
