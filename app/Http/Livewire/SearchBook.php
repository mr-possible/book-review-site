<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SearchBook extends Component
{
    protected $rules = [
        'query' => 'required|string',
    ];

    public function render()
    {
        return view('livewire.search-book');
    }
}
