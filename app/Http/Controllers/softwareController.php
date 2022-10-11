<?php

namespace App\Http\Controllers;

use App\Tracker\src\Facades\Tracker;
class softwareController extends Controller
{
    function Browser()
    {
        $argument = [
            'method' => 'DevicesDetection.getBrowsers',
            'idSite' => 1,
            'period' => 'day',
            'date' => 'today',
            'token' => 'e06a8fd22e0ffc40705f87610d1d5cd6',
            'format' => 'json'
         ];
         $test = Tracker::getSoftware()->Browser($argument);
         return $test;
    }

    function operatingsystem(){
        $argument = [
            'method' => 'DevicesDetection.getOsFamilies',
            'idSite' => 1,
            'period' => 'day',
            'date' => 'today',
            'token' => 'e06a8fd22e0ffc40705f87610d1d5cd6',
            'format' => 'json'
         ];
         $test = Tracker::getSoftware()->Os($argument);
         return $test;
    }

    function plugin(){
        $argument = [
            'method' => 'DevicePlugins.getPlugin',
            'idSite' => 1,
            'period' => 'day',
            'date' => 'today',
            'token' => 'e06a8fd22e0ffc40705f87610d1d5cd6',
            'format' => 'json'
         ];
         $test = Tracker::getSoftware()->plugin($argument);
         return $test;
    }
    function engine(){
        $argument = [
            'method' => 'DevicesDetection.getBrowserEngines',
            'idSite' => 1,
            'period' => 'day',
            'date' => 'today',
            'token' => 'e06a8fd22e0ffc40705f87610d1d5cd6',
            'format' => 'json'
         ];
         $test = Tracker::getSoftware()->engine($argument);
         return $test;
    }
}
