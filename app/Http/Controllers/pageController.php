<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tracker\src\Facades\Tracker;
use App\Models\InterfaceTest;

class pageController extends Controller
{
   public function PagePerformance(){
      $argument = [
         'method' => 'PagePerformance.get',
         'idSite' => 1,
         'period' => 'day',
         'date' => '2022-11-14,2022-11-18',
         'token' => 'a8e9c9a5540f44cf0eb1756b9feacfb0',
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
         'method' => 'Actions.get',
         'idSite' => 1,
         'period' => 'day',
         'date' => 'today',
         'token' => 'a8e9c9a5540f44cf0eb1756b9feacfb0',
         'format' => 'json'
      ];
      $test = Tracker::getPages()->PageView($argument);
      return response()->json([
         'status' => 200,
         'value' => $test
      ]);
   }
}
