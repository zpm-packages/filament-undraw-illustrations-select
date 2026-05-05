<?php

namespace ZPMLabs\FilamentUndraw;

use Illuminate\Support\ServiceProvider;
use Undraw\Factory\UndrawFactory;
use Undraw\Support\Laravel\LaravelCacheAdapter;
use Undraw\UndrawClient;

class FilamentUndrawServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(UndrawClient::class, static fn (): UndrawClient => UndrawFactory::create(
            cache: new LaravelCacheAdapter(),
        ));
    }

    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'filament-undraw');
        
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/filament-undraw'),
        ], 'filament-undraw-views');
    }
}
