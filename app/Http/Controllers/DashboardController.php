<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tracker\src\Facades\Tracker;

class DashboardController extends Controller
{
    public function PopularPage(){
        $argument = [
            'method' => 'Referrers.getReferrerType',
            'idSite' => 1,
            'period' => 'day',
            'date' => 'today',
            'token' => 'a8e9c9a5540f44cf0eb1756b9feacfb0',
            'format' => 'json'
        ];
         $test = Tracker::getVisitor()->ChannelType($argument);
         return response()->json([
            'status' => 200,
            'value' => $test
         ]);
       }
       public function TotalVisitors(){
        $argument = [
            'method' => 'Live.getCounters',
            'idSite' => 1,
            'lastMinutes' => 1000,
            'date' => 'today',
            'token' => 'a8e9c9a5540f44cf0eb1756b9feacfb0',
            'format' => 'json'
        ];
         $test = Tracker::getDashboard()->Visitors($argument);
         return response()->json([
            'status' => 200,
            'value' => $test
         ]);
       }
       public function TotalActions(){
        $argument = [
            'method' => 'Referrers.getReferrerType',
            'idSite' => 1,
            'period' => 'day',
            'date' => 'today',
            'token' => 'a8e9c9a5540f44cf0eb1756b9feacfb0',
            'format' => 'json'
        ];
         $test = Tracker::getDashboard()->Visitors($argument);
         return response()->json([
            'status' => 200,
            'value' => $test
         ]);
       }
       public function VisitorOverDay(){
        $argument = [
            'method' => 'VisitTime.getByDayOfWeek',
            'idSite' => 1,
            'period' => 'day',
            'date' => Date("Y-m-d"),
            'token' => 'a8e9c9a5540f44cf0eb1756b9feacfb0',
            'format' => 'json'
        ];
         $test = Tracker::getDashboard()->VisitorOverDay($argument);
         return response()->json([
            'status' => 200,
            'value' => $test
         ]);
       }
       
}
