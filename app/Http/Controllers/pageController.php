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
         'token' => '3e7cd2087d85ab33492ac570db70ab7c',
         'format' => 'json'
      ];
      $test = Tracker::getPages()->PagePerformance($argument);
      return response()->json([
         'status' => 200,
         'value' => $test
      ]);
 }
 public function PageView(){
   $argument = [
      'method' => 'PagePerformance.get',
      'idSite' => 1,
      'period' => 'day',
      'date' => 'today',
      'token' => '3e7cd2087d85ab33492ac570db70ab7c',
      'format' => 'json'
   ];
   $test = Tracker::getPages()->PagePerformance($argument);
   return response()->json([
      'status' => 200,
      'value' => $test
   ]);
 }
}
