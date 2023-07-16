<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Guesser extends Component
{
    public $name = 'Adam';

    public function render()
    {
        return view('livewire.guesser');
    }
}
