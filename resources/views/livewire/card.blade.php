<div>

    <div class="card bg-base-300 m-4">
        <div class="card-body" wire:init='loadCard'>
            <div wire:loading wire:target='loadCard'>
                <div class="card-title">
                    Your next challenge is loading
                </div>
            </div>

            @if ($card && !$evaluated)
                <div class="card-title">{{ $card['name'] }} / {{ $card['type_line'] }}</div>
                <p>
                    {{ $card['oracle_text'] }}
                </p>
                <input wire:model="cmc" type="number" class="input input-bordered" placeholder="Converted mana value">
                <x-color-picker wire:model='colors' />
                <button class="btn btn-outline" wire:click="evaluate" @disabled(!$this->isEnabled())>Submit</button>
            @endif

            @if ($card && $evaluated)
                <figure wire:loading.remove>
                    <img src="{{ $card['image_uris']['png'] }}">
                </figure>
                <button wire:loading.remove class="btn btn-outline" wire:click="loadCard">Next Challenge</button>
            @endif
        </div>
    </div>
    <div class="card bg-base-300 m-4">
        <div class="card-body">
            <div class="card-title">
                Score: {{ $score }}
            </div>
        </div>
    </div>
</div>
