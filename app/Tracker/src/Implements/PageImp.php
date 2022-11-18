<?php

// namespace App\Tracker\src\Implements;

use Illuminate\Support\Facades\Http;

class PageImp
{
    public static function Data($argument)
    {
        $Browser_data = Http::get("http://localhost/matomo/index.php?module=API&method={$argument['method']}&idSite={$argument['idSite']}&period={$argument['period']}&date={$argument['date']}&format={$argument['format']}&token_auth={$argument['token']}&force_api_session=1");
        $datas = json_decode($Browser_data, true);

        return $datas;
    }
    public static function PageView($argument)
    {
        $Browser_data = Http::get("http://localhost/matomo/index.php?module=API&method={$argument['method']}&idSite={$argument['idSite']}&period={$argument['period']}&date={$argument['date']}&format={$argument['format']}&token_auth={$argument['token']}&force_api_session=1");
        $Other_data = Http::get("http://localhost/matomo/index.php?module=API&method=Actions.getPageUrls&idSite={$argument['idSite']}&period={$argument['period']}&date={$argument['date']}&format={$argument['format']}&token_auth={$argument['token']}&force_api_session=1");
        $datas = json_decode($Browser_data, true);
        $data = json_decode($Other_data, true);

        return response()->json([
            'pageview' => $datas,
            'Alldata' => $data
        ]);
    }
}
