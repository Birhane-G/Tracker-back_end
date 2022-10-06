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
        
        $Browser = new Browser();
        $Browser->Browser_name = $Browser_data[0]["label"];
        $Browser->nb_uniq_visitors = $Browser_data[0]["nb_uniq_visitors"];
        $Browser->nb_visits = $Browser_data[0]["nb_visits"];
        $Browser->nb_actions = $Browser_data[0]["nb_actions"];
        $Browser->nb_users = $Browser_data[0]["nb_users"];
        $Browser->sum_visit_length = $Browser_data[0]["sum_visit_length"];
        $Browser->bounce_count = $Browser_data[0]["bounce_count"];;
        $Browser->nb_visits_convertes = $Browser_data[0]["nb_visits_converted"];
        $Browser->logo = $Browser_data[0]["logo"];
        $Browser->segment = $Browser_data[0]["segment"];
        $Browser->save();

        return $Browser_data->json();
        // return $id?Browser::find($id):Browser::all();
    }
}
