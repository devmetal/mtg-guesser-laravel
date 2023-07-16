<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ColorPicker extends Component
{
    public $colors = [
        [
            "symbol" => "R",
            "image" => "/R.svg",
            "label" => "Red"
        ],
        [
            "symbol" => "B",
            "image" => "/B.svg",
            "label" => "Black"
        ],
        [
            "symbol" => "W",
            "image" => "/W.svg",
            "label" => "White"
        ],
        [
            "symbol" => "U",
            "image" => "/U.svg",
            "label" => "Blue"
        ],
        [
            "symbol" => "G",
            "image" => "/G.svg",
            "label" => "Green"
        ],
        [
            "symbol" => "C",
            "image" => "/C.svg",
            "label" => "Colorless"
        ]
    ];

    public $selected = [];

    public $change;

    public function select($color)
    {
        $index = array_search($color, $this->selected);
        if ($index === false) {
            array_push($this->selected, $color);
        } else {
            array_splice($this->selected, $index, 1);
        }
        $this->emit("colorsChanged", $this->selected);
    }

    public function render()
    {
        return view('livewire.color-picker');
    }
}
