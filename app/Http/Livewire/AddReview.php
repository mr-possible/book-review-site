<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddReview extends Component
{
    public function render()
    {
        return view('livewire.add-review');
    }

    public $result;

    public function mount($result) {
        $this->result = $result;
    }
}
