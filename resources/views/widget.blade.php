<x-filament-widgets::widget>
    <x-filament::card>
        <h2 class="font-bold text-xl mb-4 text-center">
            {{ __('clock-widget::clock-widget.title') }}
        </h2>

        <div
            x-ignore
            ax-load
            ax-load-src="{{ \Filament\Support\Facades\FilamentAsset::getAlpineComponentSrc('clock-widget', 'awcodes/clock-widget') }}"
            x-data="clockWidget()"
            class="text-center"
        >
            <p>{{ __('clock-widget::clock-widget.description') }}</p>
            <p class="text-xl" x-text="time"></p>
        </div>
    </x-filament::card>
</x-filament-widgets::widget>
