<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BookReview extends Component
{
    public function render()
    {
        return view('livewire.book-review');
    }

    public $review;

    public function mount($review) {
        $this->review = $review;
    }
}
