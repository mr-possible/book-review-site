<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BookCard extends Component
{
    public function render()
    {
        return view('livewire.book-card');
    }

    public $result;

    public function mount($result) {
        $this->result = $result;
    }

}
