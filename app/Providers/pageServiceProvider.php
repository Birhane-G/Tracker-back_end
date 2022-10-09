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
       $this->app->bind('App\Tracker\src\Files\Software', 'App\Tracker\src\Implements\ImplementationSoftware');
      
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
