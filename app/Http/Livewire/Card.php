<?php

declare(strict_types=1);

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;

class Card extends Component
{
    public mixed $card;

    public int $score = 0;

    public string $cmc = "";

    public mixed $colors = [];

    public bool $evaluated = false;

    protected $listeners = ['colorsChanged'];

    public function evaluate()
    {
        $score = 0;
        $cardColors = $this->card['colors']; // ['W', 'B']
        $cardCmc = $this->card['cmc']; // 4

        if (intval($this->cmc) === $cardCmc) {
            $score++;
        }

        foreach ($this->colors as $color) {
            if ($color === 'C' && empty($cardColors)) {
                $score++;
            } elseif ($color !== 'C' && in_array($color, $cardColors)) {
                $score++;
            }
        }

        $this->evaluated = true;
        $this->score += $score;
    }

    public function isEnabled()
    {
        return count($this->colors) > 0 && strlen($this->cmc) > 0;
    }

    public function colorsChanged($colors)
    {
        $this->colors = $colors;
    }

    public function loadCard(): void
    {
        $response = Http::get('https://api.scryfall.com/cards/random?q=-t:land year>2000');
        $this->card = $response->json();
        $this->evaluated = false;
        $this->colors = [];
        $this->cmc = "";
    }

    public function render(): View|Factory
    {
        return view('livewire.card');
    }
}
