<x-filament-panels::page>
    @foreach($blocks as $block)
        @livewire(new $block['block'](), ['name' => $block['name'], 'width' => $block['width']])
    @endforeach
</x-filament-panels::page>
