<x-filament-widgets::widget>
    <x-filament::card>
        <x-slot name="header">
            <x-filament::card.heading>
                {{ __('clock-widget::title') }}
            </x-filament::card.heading>
        </x-slot>

        <div
            x-ignore
            ax-load
            ax-load-src="{{ \Filament\Support\Facades\FilamentAsset::getAlpineComponentSrc('clock-widget', 'awcodes/clock-widget') }}"
            x-data="clockWidget()"
            class="text-center"
        >
            <p>{{ __('clock-widget::description') }}</p>
            <p class="text-xl" x-text="time"></p>
        </div>
    </x-filament::card>
</x-filament-widgets::widget>
