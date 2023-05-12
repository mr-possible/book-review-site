<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BookSearchResult extends Component
{
    public $result;

    public function mount($result)
    {
        $this->result = $result;
    }
    
    public function render()
    {
        return view('livewire.book-search-result');
    }
}
