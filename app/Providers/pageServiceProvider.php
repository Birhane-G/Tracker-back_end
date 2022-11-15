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
       $this->app->bind('App\Models\TestInterface', 'App\Tracker\src\Implements\SoftwareImp');
    //    $this->app->bind('App\Models\InterfaceTest', 'App\Models\Implement\PageInterfaceImp');
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
