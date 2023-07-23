<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ColorPicker extends Component
{

    public $colors = [
        [
            "symbol" => "R",
            "image" => "/R.svg",
            "label" => "Red",
            "selected" => false,
        ],
        [
            "symbol" => "B",
            "image" => "/B.svg",
            "label" => "Black",
            "selected" => false,
        ],
        [
            "symbol" => "W",
            "image" => "/W.svg",
            "label" => "White",
            "selected" => false,
        ],
        [
            "symbol" => "U",
            "image" => "/U.svg",
            "label" => "Blue",
            "selected" => false,

        ],
        [
            "symbol" => "G",
            "image" => "/G.svg",
            "label" => "Green",
            "selected" => false,
        ],
        [
            "symbol" => "C",
            "image" => "/C.svg",
            "label" => "Colorless",
        ]
    ];

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.color-picker');
    }
}
