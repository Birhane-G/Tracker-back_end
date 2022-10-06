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

        // $Browser_data = Http::get("http://localhost/matomo/index.php?module=API&method=DevicesDetection.getBrowsers&idSite={$idsite}&period={$period}&date={$date}&format={$format}&token_auth={$token}&force_api_session=1");
        
        $items = array(1,2,3,4,5,6,7,8);

       foreach($items as $item){
        echo $item;
       }
      

        // $Browser = new Browser();
        // $Browser->Browser_name = $Browser_data[0]["label"];
        // $Browser->nb_uniq_visitors = $data["nb_uniq_visitors"];
        // $Browser->nb_visits = $data["nb_visits"];
        // $Browser->nb_actions = $data["nb_actions"];
        // $Browser->nb_users = $data["nb_users"];
        // $Browser->sum_visit_length = $data["sum_visit_length"];
        // $Browser->bounce_count = $data["bounce_count"];
        // $Browser->nb_visits_convertes = $data["nb_visits_converted"];
        // $Browser->logo = $data["logo"];
        // $Browser->segment = $data["segment"];
        // $Browser->save();

        // return $data;
        // return $id?Browser::find($id):Browser::all();
    }
}
