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
}

