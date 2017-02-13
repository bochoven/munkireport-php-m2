<?php

namespace Mr\Providers;

use Illuminate\Support\ServiceProvider;
use Mr\CheckIn\CheckInRouter;
use MrLegacy\Http\Middleware\SafePHPUnserialize;

class CheckInServiceProvider extends ServiceProvider
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
        $this->app->singleton('CheckInRouter', function ($app) {
            return new CheckInRouter();
        });
    }
}
