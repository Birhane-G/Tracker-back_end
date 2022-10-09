<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Tracker\src\Facades\Tracker;
class pageController extends Controller
{
   // public function pagePerformance(testinterface $test){
   //  $test->test();
   // }
   public function test(){
      $argument = [
         'idSite' => 1,
         'period' => 'day',
         'date' => 'today',
         'token' => 'e06a8fd22e0ffc40705f87610d1d5cd6',
         'format' => 'json'
      ];
      $test = Tracker::getSoftware()->Browser($argument);
      return $test;
   }
}
