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
            'date' => 'today',
            'token' => '3e7cd2087d85ab33492ac570db70ab7c',
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
            'date' => 'today',
            'token' => '3e7cd2087d85ab33492ac570db70ab7c',
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
            'period' => 'range',
            'date' => '2022-10-18,2022-10-20',
            'token' => '3e7cd2087d85ab33492ac570db70ab7c',
            'format' => 'json'
        ];
         $test = Tracker::getVisitor()->Log($argument);
         return response()->json([
            'status' => 200,
            'value' => $test
         ]);
       }
}

