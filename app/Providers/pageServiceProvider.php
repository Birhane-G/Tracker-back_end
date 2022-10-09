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
       $this->app->bind('App\Tracker\src\Data\data', 'App\Tracker\src\Implements\testimplementation');
      
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
