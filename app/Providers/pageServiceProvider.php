<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class pageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
       $this->app->bind('App\Tracker\src\Files\TestInterface', 'App\Tracker\src\Implements\TestImpl');
    //    $this->app->bind('App\Tracker\src\Files\TestInterface', 'App\Tracker\src\Files\store');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        
    }

}
