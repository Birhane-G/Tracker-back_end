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
