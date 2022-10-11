<?php

namespace App\Tracker\src\Facades;

use Illuminate\Support\Facades\Facade;

class Tracker extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Tracker';
    }
}
