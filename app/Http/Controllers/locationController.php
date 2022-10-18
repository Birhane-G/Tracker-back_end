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
            'token' => '3e7cd2087d85ab33492ac570db70ab7c',
            'format' => 'json'
         ];
         $test = Tracker::getLocation()->Country($argument);
         return response()->json([
            'status' => 200,
            'value' => $test
         ]);
    }
    function Continent()
    {
        $argument = [
            'method' => 'UserCountry.getContinent',
            'idSite' => 1,
            'period' => 'day',
            'date' => 'today',
            'token' => '3e7cd2087d85ab33492ac570db70ab7c',
            'format' => 'json'
         ];
         $test = Tracker::getLocation()->Continent($argument);
         return response()->json([
            'status' => 200,
            'value' => $test
         ]);
    }
    function Region()
    {
        $argument = [
            'method' => 'UserCountry.getRegion',
            'idSite' => 1,
            'period' => 'day',
            'date' => 'today',
            'token' => '3e7cd2087d85ab33492ac570db70ab7c',
            'format' => 'json'
         ];
         $test = Tracker::getLocation()->Region($argument);
         return response()->json([
            'status' => 200,
            'value' => $test
         ]);
    }
    function City()
    {
        $argument = [
            'method' => 'UserCountry.getCity',
            'idSite' => 1,
            'period' => 'day',
            'date' => 'today',
            'token' => '3e7cd2087d85ab33492ac570db70ab7c',
            'format' => 'json'
         ];
         $test = Tracker::getLocation()->City($argument);
         return response()->json([
            'status' => 200,
            'value' => $test
         ]);
    }
}
