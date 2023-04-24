<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BookDetailInfo extends Component
{
    public function render()
    {
        return view('livewire.book-detail-info');
    }

    public $result;

    public function mount($result) {
        $this->result = $result;
    }
}
