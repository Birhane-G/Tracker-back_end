<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Tracker\src\Tracker;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Tracker', function($app) {
            return new Tracker;
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
