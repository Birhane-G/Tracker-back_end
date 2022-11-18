<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tracker\src\Facades\Tracker;

class locationController extends Controller
{
   // $date = ;

    function Country()
    {
        $argument = [
            'method' => 'UserCountry.getCountry',
            'idSite' => 1,
            'period' => 'day',
            'date' => Date("Y-m-d"),
            'token' => 'a8e9c9a5540f44cf0eb1756b9feacfb0',
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
            'date' => Date("Y-m-d"),
            'token' => 'a8e9c9a5540f44cf0eb1756b9feacfb0',
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
            'date' => Date("Y-m-d"),
            'token' => 'a8e9c9a5540f44cf0eb1756b9feacfb0',
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
            'date' => Date("Y-m-d"),
            'token' => 'a8e9c9a5540f44cf0eb1756b9feacfb0',
            'format' => 'json'
         ];
         $test = Tracker::getLocation()->City($argument);
         return response()->json([
            'status' => 200,
            'value' => $test
         ]);
    }
}
