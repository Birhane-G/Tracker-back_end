<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tracker\src\Facades\Tracker;
use App\Models\InterfaceTest;

class pageController extends Controller
{
   public function PagePerformance(InterfaceTest $val){
   
    $val->Page(); 
 }
   public function PageView(){
      $argument = [
         'method' => 'Actions.get',
         'idSite' => 1,
         'period' => 'range',
         'date' => '2022-10-16,2022-10-19',
         'token' => '3e7cd2087d85ab33492ac570db70ab7c',
         'format' => 'json'
      ];
      $test = Tracker::getPages()->PageView($argument);
      return response()->json([
         'status' => 200,
         'value' => $test
      ]);
      // $data->Page();
   }
}
