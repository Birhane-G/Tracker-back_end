<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tracker\src\Facades\Tracker;

class locationController extends Controller
{
    function Country()
    {
        $argument = [
            'method' => 'UserCountry.getCountry',
            'idSite' => 1,
            'period' => 'day',
            'date' => 'today',
            'token' => 'e06a8fd22e0ffc40705f87610d1d5cd6',
            'format' => 'json'
         ];
         $test = Tracker::getLocation()->Country($argument);
         return $test;
    }
    function Continent()
    {
        $argument = [
            'method' => 'UserCountry.getContinent',
            'idSite' => 1,
            'period' => 'day',
            'date' => 'today',
            'token' => 'e06a8fd22e0ffc40705f87610d1d5cd6',
            'format' => 'json'
         ];
         $test = Tracker::getLocation()->Continent($argument);
         return $test;
    }
    function Region()
    {
        $argument = [
            'method' => 'UserCountry.getRegion',
            'idSite' => 1,
            'period' => 'day',
            'date' => 'today',
            'token' => 'e06a8fd22e0ffc40705f87610d1d5cd6',
            'format' => 'json'
         ];
         $test = Tracker::getLocation()->Region($argument);
         return $test;
    }
    function City()
    {
        $argument = [
            'method' => 'UserCountry.getCity',
            'idSite' => 1,
            'period' => 'day',
            'date' => 'today',
            'token' => 'e06a8fd22e0ffc40705f87610d1d5cd6',
            'format' => 'json'
         ];
         $test = Tracker::getLocation()->City($argument);
         return $test;
    }
}
