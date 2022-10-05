<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class softwareController extends Controller
{
    function Browser()
    {

        $token = "e06a8fd22e0ffc40705f87610d1d5cd6";
        $idsite = 1;
        $period = "day";
        $date = "yesterday";
        $format = "json";

        $Browser = Http::get("http://localhost/matomo/index.php?module=API&method=DevicesDetection.getBrowsers&idSite={$idsite}&period={$period}&date={$date}&format={$format}&token_auth={$token}&force_api_session=1");

        return $Browser->json();
    }
}
