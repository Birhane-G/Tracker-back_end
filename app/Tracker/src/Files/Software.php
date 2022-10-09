<?php

namespace App\Tracker\src\Files;
use App\Tracker\src\Data\data;
use App\Tracker\src\Files;
use Illuminate\Support\Facades\Http;
use App\Models\Browser;

class Software extends store
{
    private $browser = [];

    public function Browser($argument = [])
    {
        // $browser = $this->setArguments($argument);
        // return $this->argument->getData($browser);
        $token = $argument['token'];
        $idsite = $argument['idSite'];
        $period = $argument['period'];
        $date = $argument['date'];
        $format = $argument['format'];

        $Browser_data = Http::get("http://localhost/matomo/index.php?module=API&method=DevicesDetection.getBrowsers&idSite={$idsite}&period={$period}&date={$date}&format={$format}&token_auth={$token}&force_api_session=1");
        $datas = json_decode($Browser_data, true);
        
     return $datas;
    }
}
