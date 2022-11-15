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
            'token' => '3e7cd2087d85ab33492ac570db70ab7c',
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
            'method' => 'Referrers.getReferrerType',
            'idSite' => 1,
            'period' => 'day',
            'date' => 'today',
            'token' => '3e7cd2087d85ab33492ac570db70ab7c',
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
            'token' => '3e7cd2087d85ab33492ac570db70ab7c',
            'format' => 'json'
        ];
         $test = Tracker::getVisitor()->ChannelType($argument);
         return response()->json([
            'status' => 200,
            'value' => $test
         ]);
       }
       public function VisitorOverDay(){
        $argument = [
            'method' => 'VisitTime.getByDayOfWeek',
            'idSite' => 1,
            'period' => 'range',
            'date' => '2022-10-18,2022-10-20',
            'token' => '3e7cd2087d85ab33492ac570db70ab7c',
            'format' => 'json'
        ];
         $test = Tracker::getDashboard()->VisitorOverDay($argument);
         return response()->json([
            'status' => 200,
            'value' => $test
         ]);
       }
       
}
