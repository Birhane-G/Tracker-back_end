<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Tracker\src\Facades\Tracker;
use App\Tracker\src\Files\TestInterface;

class pageController extends Controller
{
   public function test(){

      TestInterface::Test("hey");
     
 }
}
