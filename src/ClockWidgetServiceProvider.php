<?php

namespace Awcodes\ClockWidget;

use Filament\Support\Assets\AlpineComponent;
use Filament\Support\Facades\FilamentAsset;
use Livewire\Livewire;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ClockWidgetServiceProvider extends PackageServiceProvider
{
    public static string $name = 'clock-widget';

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name)
            ->hasViews()
            ->hasTranslations();
    }

    public function packageBooted(): void
    {
        Livewire::component('clock-widget', ClockWidget::class);

        // Asset Registration
        FilamentAsset::register(
            assets:[
                 AlpineComponent::make('clock-widget', __DIR__ . '/../resources/dist/clock-widget.js'),
            ],
            package: 'awcodes/clock-widget'
        );
    }
}
