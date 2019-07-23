<?php

namespace Adiafora\Punycode;

use Illuminate\Support\ServiceProvider;

class PunycodeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('punycode', function () {
            return new Punycode();
        });
    }
}
