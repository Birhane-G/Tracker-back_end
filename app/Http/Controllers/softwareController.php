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
            'date' => '2022-11-17',
            'token' => 'a8e9c9a5540f44cf0eb1756b9feacfb0',
            'format' => 'json'
         ];
         $test = Tracker::getSoftware()->Browser($argument);
         return response()->json([
            'status' => 200,
            'value' => $test
         ]);
    }

    function operatingsystem(){
        $argument = [
            'method' => 'DevicesDetection.getOsFamilies',
            'idSite' => 1,
            'period' => 'day',
            'date' => '2022-11-17',
            'token' => 'a8e9c9a5540f44cf0eb1756b9feacfb0',
            'format' => 'json'
         ];
         $test = Tracker::getSoftware()->Os($argument);
         return response()->json([
            'status' => 200,
            'value' => $test
         ]);
    }

    function plugin(){
        $argument = [
            'method' => 'DevicePlugins.getPlugin',
            'idSite' => 1,
            'period' => 'day',
            'date' => '2022-11-17',
            'token' => 'a8e9c9a5540f44cf0eb1756b9feacfb0',
            'format' => 'json'
         ];
         $test = Tracker::getSoftware()->plugin($argument);
         return response()->json([
            'status' => 200,
            'value' => $test
         ]);
    }
    function engine(){
        $argument = [
            'method' => 'DevicesDetection.getBrowserEngines',
            'idSite' => 1,
            'period' => 'day',
            'date' => '2022-11-17',
            'token' => 'a8e9c9a5540f44cf0eb1756b9feacfb0',
            'format' => 'json'
         ];
         $test = Tracker::getSoftware()->engine($argument);
         return response()->json([
            'status' => 200,
            'value' => $test
         ]);
    }
}
