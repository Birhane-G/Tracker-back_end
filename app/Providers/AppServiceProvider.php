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
            $argument = [
                'idSite' => 1,
                'period' => 'day',
                'date' => 'today',
                'token' => 'e06a8fd22e0ffc40705f87610d1d5cd6',
                'format' => 'json'
             ];
            return new Tracker($argument);
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
