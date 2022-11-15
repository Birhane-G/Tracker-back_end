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
         'period' => 'range',
         'date' => '2022-10-18,2022-10-23',
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
         'method' => 'Actions.get',
         'idSite' => 1,
         'period' => 'day',
         'date' => '2022-10-18,2022-10-20',
         'token' => '3e7cd2087d85ab33492ac570db70ab7c',
         'format' => 'json'
      ];
      $test = Tracker::getPages()->PageView($argument);
      return response()->json([
         'status' => 200,
         'value' => $test
      ]);
   }
}
