<?php

namespace App\Http\Controllers;

use App\Tracker\src\Facades\Tracker;
use Illuminate\Http\Request;

class visitorController extends Controller
{
    public function ChannelType(){
        $argument = [
            'method' => 'Referrers.getReferrerType',
            'idSite' => 1,
            'period' => 'day',
            'date' => Date("Y-m-d"),
            'token' => 'a8e9c9a5540f44cf0eb1756b9feacfb0',
            'format' => 'json'
        ];
         $test = Tracker::getVisitor()->ChannelType($argument);
         return response()->json([
            'status' => 200,
            'value' => $test
         ]);
       }
       public function Live(){
        $argument = [
            'method' => 'Live.getCounters',
            'idSite' => 1,
            'lastMinutes' => 30,
            'date' => Date("Y-m-d"),
            'token' => 'a8e9c9a5540f44cf0eb1756b9feacfb0',
            'format' => 'json'
        ];
         $test = Tracker::getVisitor()->Live($argument);
         return response()->json([
            'status' => 200,
            'value' => $test
         ]);
       }
       public function VisitorLog(){
        $argument = [
            'method' => 'Live.getLastVisitsDetails',
            'idSite' => 1,
            'period' => 'day',
            'date' => Date("Y-m-d"),
            'token' => 'a8e9c9a5540f44cf0eb1756b9feacfb0',
            'format' => 'json'
        ];
         $test = Tracker::getVisitor()->Log($argument);
         return response()->json([
            'status' => 200,
            'value' => $test
         ]);
       }
}

