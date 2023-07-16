<ul class="manu bg-base-200 rounded-box m-4 p-4">
    @foreach ($colors as $color)
        <li wire:click.debounce.200ms="select('{{ $color['symbol'] }}')">
            <a @class([
                'flex',
                'gap-4',
                'py-4',
                'items-center',
                'opacity-50' => !in_array($color['symbol'], $selected),
            ])>
                <img src="{{ $color['image'] }}" class="h-8">
                {{ $color['label'] }}
            </a>
        </li>
    @endforeach
</ul>
