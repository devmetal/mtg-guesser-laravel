<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Rules extends Component
{
    public $visible = false;

    public function toggle()
    {
        $this->visible = !$this->visible;
    }

    public function render()
    {
        return view('livewire.rules');
    }
}
