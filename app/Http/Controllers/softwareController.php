<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Browser;
class softwareController extends Controller
{
    function Browser($id=null)
    {

        $token = "e06a8fd22e0ffc40705f87610d1d5cd6";
        $idsite = 1;
        $period = "day";
        $date = "today";
        $format = "json";

        $Browser_data = Http::get("http://localhost/matomo/index.php?module=API&method=DevicesDetection.getBrowsers&idSite={$idsite}&period={$period}&date={$date}&format={$format}&token_auth={$token}&force_api_session=1");
        // $Browser = new Browser();
        // $Browser->Browser_name = $Browser_data->label;
        return $Browser_data->json();


        // return $id?Browser::find($id):Browser::all();
    }
}
