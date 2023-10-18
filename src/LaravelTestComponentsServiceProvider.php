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
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Bileşenlerinizi tanıtmak ve Blade şablonlarını kullanılabilir hale getirmek için kullanabilirsiniz.
        $this->loadViewsFrom(__DIR__.'/../resources/views/components', 'laraveltestcomponents');

        // Bileşenlerinizi başka projelere dağıtmak için kullanabilirsiniz.
        $this->publishes([
            __DIR__.'/../resources/views/components' => resource_path('views/vendor/laraveltestcomponents'),
        ], 'laraveltestcomponents-views');
    }
}
