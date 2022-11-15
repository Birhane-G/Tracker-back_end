<?php

namespace App\Tracker\src\Implements;

use Illuminate\Support\Facades\Http;
//implements TestInterface
class SoftwareImp 
{
public static function Data($argument)
    {
        $Browser_data = Http::get("http://localhost/matomo/index.php?module=API&method={$argument['method']}&idSite={$argument['idSite']}&period={$argument['period']}&date={$argument['date']}&format={$argument['format']}&token_auth={$argument['token']}&force_api_session=1");
        $datas = json_decode($Browser_data, true);
        // foreach($datas as $index => $item) {
        //     $value = [
        //         "label" => $datas[$index]['label'],
        //         "nb_visits" => $datas[$index]['nb_visits'],
        //     ];
        // }
        return $datas;
    }
   
}
