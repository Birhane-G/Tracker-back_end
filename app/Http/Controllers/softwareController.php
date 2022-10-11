<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Browser;
use App\Models\engine;
use App\Models\plugin;
use App\Models\operatingsystem;
class softwareController extends Controller
{
    function Browser()
    {
        //   items = array(1,2,3,4,5,6,7,8);
        //    foreach($items as $item){
        //     echo $item;
        //    }
        // foreach($datas as $data){
        //     foreach($data as $key => $value){
        //         echo "$key - $value";
        //     }
        // }

        $token = "e06a8fd22e0ffc40705f87610d1d5cd6";
                $tokenGk = "b55d5e3d2ab278933faea944d3a867a1";

        $idsite = 2;
        $period = "day";
        $date = "today";
        $format = "json";

        $Browser_data = Http::get("http://localhost/matomo/index.php?module=API&method=DevicesDetection.getBrowsers&idSite={$idsite}&period={$period}&date={$date}&format={$format}&token_auth={$tokenGk}&force_api_session=1");
        $datas = json_decode($Browser_data, true);

        foreach ($datas as $index => $item) {
            // echo $datas[$index]['label'];
            $Browser = new Browser();
            $Browser->Browser_name = $datas[$index]["label"];
            $Browser->nb_uniq_visitors = $datas[$index]["nb_uniq_visitors"];
            $Browser->nb_visits = $datas[$index]["nb_visits"];
            $Browser->nb_actions = $datas[$index]["nb_actions"];
            $Browser->nb_users = $datas[$index]["nb_users"];
            $Browser->max_actions = $datas[$index]["max_actions"];
            $Browser->sum_visit_length = $datas[$index]["sum_visit_length"];
            $Browser->bounce_count = $datas[$index]["bounce_count"];
            $Browser->nb_visits_converted = $datas[$index]["nb_visits_converted"];
            $Browser->logo = $datas[$index]["logo"];
            $Browser->segment = $datas[$index]["segment"];
            $Browser->save();
        }

     return $datas;
    }

    function operatingsystem(){
        $token = "e06a8fd22e0ffc40705f87610d1d5cd6";
        $idsite = 1;
        $period = "day";
        $date = "today";
        $format = "json";

        $os_data = Http::get("http://localhost/matomo/index.php?module=API&method=DevicesDetection.getOsFamilies&idSite=1&period={$period}&date={$date}&format={$format}&token_auth={$token}&force_api_session=1");
        $datas = json_decode($os_data, true);

        foreach ($datas as $index => $item) {
            // echo $datas[$index]['label'];
            $operatingsystem = new operatingsystem();
            $operatingsystem->os_name = $datas[$index]["label"];
            $operatingsystem->nb_uniq_visitors = $datas[$index]["nb_uniq_visitors"];
            $operatingsystem->nb_visits = $datas[$index]["nb_visits"];
            $operatingsystem->nb_actions = $datas[$index]["nb_actions"];
            $operatingsystem->nb_users = $datas[$index]["nb_users"];
            $operatingsystem->max_actions = $datas[$index]["max_actions"];
            $operatingsystem->sum_visit_length = $datas[$index]["sum_visit_length"];
            $operatingsystem->bounce_count = $datas[$index]["bounce_count"];
            $operatingsystem->nb_visits_converted = $datas[$index]["nb_visits_converted"];
            $operatingsystem->logo = $datas[$index]["logo"];
            $operatingsystem->save();
        }

     return $datas;
    }

    function plugin(){
        $token = "e06a8fd22e0ffc40705f87610d1d5cd6";
        $idsite = 1;
        $period = "day";
        $date = "today";
        $format = "json";

        $os_data = Http::get("http://localhost/matomo/index.php?module=API&method=DevicePlugins.getPlugin&idSite=1&period={$period}&date={$date}&format={$format}&token_auth={$token}&force_api_session=1");
        $datas = json_decode($os_data, true);

        foreach ($datas as $index => $item) {
            // echo $datas[$index]['label'];
            $plugin = new plugin();
            $plugin->plugins_name = $datas[$index]["label"];
            $plugin->nb_visits = $datas[$index]["nb_visits"];
            $plugin->nb_visits_percentage = $datas[$index]["nb_visits_percentage"];
            $plugin->logo = $datas[$index]["logo"];
            $plugin->save();
        }

     return $datas;
    }


    function engine(){
        $token = "e06a8fd22e0ffc40705f87610d1d5cd6";
        $idsite = 1;
        $period = "day";
        $date = "today";
        $format = "json";

        $os_data = Http::get("http://localhost/matomo/index.php?module=API&method=DevicesDetection.getBrowserEngines&idSite=1&period={$period}&date={$date}&format={$format}&token_auth={$token}&force_api_session=1");
        $datas = json_decode($os_data, true);

        foreach ($datas as $index => $item) {
            // echo $datas[$index]['label'];
            $engine = new engine();
            $engine->engines_name = $datas[$index]["label"];
            $engine->nb_uniq_visitors = $datas[$index]["nb_uniq_visitors"];
            $engine->nb_visits = $datas[$index]["nb_visits"];
            $engine->nb_actions = $datas[$index]["nb_actions"];
            $engine->nb_users = $datas[$index]["nb_users"];
            $engine->max_actions = $datas[$index]["max_actions"];
            $engine->sum_visit_length = $datas[$index]["sum_visit_length"];
            $engine->bounce_count = $datas[$index]["bounce_count"];
            $engine->nb_visits_converted = $datas[$index]["nb_visits_converted"];
            $engine->segment = $datas[$index]["segment"];

            $engine->save();
        }

     return $datas;
    }
}
