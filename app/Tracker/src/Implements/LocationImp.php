<?php

namespace App\Tracker\src\Implements;

use Illuminate\Support\Facades\Http;

class LocationImp
{
public static function CRC($argument)
    {
        $Browser_data = Http::get("http://localhost/matomo/index.php?module=API&method={$argument['method']}&idSite={$argument['idSite']}&period={$argument['period']}&date={$argument['date']}&format={$argument['format']}&token_auth={$argument['token']}&force_api_session=1");
        $datas = json_decode($Browser_data, true);
        // foreach($datas as $index => $item) {
        //     $value = [
        //         "label" => $datas[$index]['label'],
        //         "nb_visits" => $datas[$index]['nb_visits'],
        //         "nb_actions" => $datas[$index]['nb_actions'],
        //     ];
        // }
        return $datas;
    }
    public static function CountryData($argument)
    {
        $Browser_data = Http::get("http://localhost/matomo/index.php?module=API&method={$argument['method']}&idSite={$argument['idSite']}&period={$argument['period']}&date={$argument['date']}&format={$argument['format']}&token_auth={$argument['token']}&force_api_session=1");
        $datas = json_decode($Browser_data, true);
        // foreach($datas as $index => $item) {
        //     $value = [
        //         "label" => $datas[$index]['label'],
        //         "nb_visits" => $datas[$index]['nb_visits'],
        //         "nb_actions" => $datas[$index]['nb_actions'],
        //         "logo" => $datas[$index]['logo'],
        //     ];
        // }
        return $datas;
    }
}
