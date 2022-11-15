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
            'token' => '3e7cd2087d85ab33492ac570db70ab7c',
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
            'date' => 'today',
            'token' => '3e7cd2087d85ab33492ac570db70ab7c',
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
            'date' => 'today',
            'token' => '3e7cd2087d85ab33492ac570db70ab7c',
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
            'date' => 'today',
            'token' => '3e7cd2087d85ab33492ac570db70ab7c',
            'format' => 'json'
         ];
         $test = Tracker::getSoftware()->engine($argument);
         return response()->json([
            'status' => 200,
            'value' => $test
         ]);
    }
}
