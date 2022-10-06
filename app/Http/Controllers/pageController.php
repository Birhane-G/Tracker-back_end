<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class pageController extends Controller
{
    function pagePerformance(){
      
        $token = "e06a8fd22e0ffc40705f87610d1d5cd6";
        $idsite = 1;
        $period = "day";
        $date = "yesterday";
        $format = "json";

      $trying = Http::get("http://localhost/matomo/index.php?module=API&method=Actions.get&idSite={$idsite}&period={$period}&date={$date}&format={$format}&token_auth={$token}&force_api_session=1");
      
      $second = Http::get("http://localhost/matomo/index.php?module=API&method=DevicesDetection.getType&idSite=1&period=day&date=today&format=JSON&token_auth={$token}&force_api_session=1");
  
      return $second->json();
    }
}
