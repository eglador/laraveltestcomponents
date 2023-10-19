<?php

namespace kenangundogan\LaravelTestComponents;

use Illuminate\Support\ServiceProvider;

class LaravelTestComponentsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views/components', 'laraveltestcomponents');

        $this->publishes([
            __DIR__.'/../resources/views/components' => resource_path('views/vendor/laraveltestcomponents'),
        ], 'laraveltestcomponents-views');
    }
}
