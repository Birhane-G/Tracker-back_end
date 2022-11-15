<?php

namespace App\Tracker\src\Implements;

use App\Models\TestInterface;
use Illuminate\Support\Facades\Http;

class DeviceImp
{
    public static function Data($argument)
    {
        $Browser_data = Http::get("http://localhost/matomo/index.php?module=API&method={$argument['method']}&idSite={$argument['idSite']}&period={$argument['period']}&date={$argument['date']}&format={$argument['format']}&token_auth={$argument['token']}&force_api_session=1");
        $datas = json_decode($Browser_data, true);

        // for ($i = 0; $i < count($datas); $i++) {
        //     foreach ($datas as $element) {
        //         $value = [$i => [
        //             'label' => $element['label'],
        //             'nb_visits' => $element['nb_visits']
        //         ]];
                
        //     }
            return $datas;
        }
        //   return $datas;
}
