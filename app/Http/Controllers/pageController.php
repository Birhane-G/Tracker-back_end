<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tracker\src\Facades\Tracker;

class pageController extends Controller
{
   public function PagePerformance(){
      $argument = [
         'method' => 'PagePerformance.get',
         'idSite' => 1,
         'period' => 'day',
         'date' => 'today',
         'token' => 'e06a8fd22e0ffc40705f87610d1d5cd6',
         'format' => 'json'
      ];
      $test = Tracker::getPages()->PagePerformance($argument);
      return $test;
 }
}
