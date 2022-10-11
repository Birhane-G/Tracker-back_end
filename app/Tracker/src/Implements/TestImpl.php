<?php

namespace App\Tracker\src\Implements;

use App\Tracker\src\Files\TestInterface;
use Illuminate\Support\Facades\Http;
class TestImpl implements TestInterface
{
public static function Test($argument)
    {
        $Browser_data = Http::get("http://localhost/matomo/index.php?module=API&method={$argument['method']}&idSite={$argument['idSite']}&period={$argument['period']}&date={$argument['date']}&format={$argument['format']}&token_auth={$argument['token']}&force_api_session=1");
        $datas = json_decode($Browser_data, true);
        return $datas;
    }
}
