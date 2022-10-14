<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\DeviceBrand;
use App\Models\DeviceType;
use App\Models\ScreenResolution;
use App\Models\DeviceModel;

class DeviceController extends Controller
{
    public function DeviceBrand(){
         $token = "e06a8fd22e0ffc40705f87610d1d5cd6";
                $tokenGk = "b55d5e3d2ab278933faea944d3a867a1";

        $idsite = 2;
        $period = "day";
        $date = "today";
        $format = "json";

        $DeviceBrand_data = Http::get("http://localhost/matomo/index.php?module=API&method=DevicesDetection.getBrand&idSite={$idsite}&period={$period}&date={$date}&format={$format}&token_auth={$tokenGk}&force_api_session=1");
        $datas = json_decode($DeviceBrand_data, true);

 foreach ($datas as $index => $item) {
            $DeviceBrand = new DeviceBrand();
            $DeviceBrand->Devices_name = $datas[$index]["label"];
            $DeviceBrand->nb_uniq_visitors = $datas[$index]["nb_uniq_visitors"];
            $DeviceBrand->nb_visits = $datas[$index]["nb_visits"];
            $DeviceBrand->nb_actions = $datas[$index]["nb_actions"];
            $DeviceBrand->nb_users = $datas[$index]["nb_users"];
            $DeviceBrand->logo = $datas[$index]["logo"];
            $DeviceBrand->max_actions = $datas[$index]["max_actions"];
            $DeviceBrand->sum_visit_length = $datas[$index]["sum_visit_length"];
            $DeviceBrand->bounce_count = $datas[$index]["bounce_count"];
            $DeviceBrand->nb_visits_converted = $datas[$index]["nb_visits_converted"];
            $DeviceBrand->segment = $datas[$index]["segment"];

            $DeviceBrand->save();
        }

    return $datas;
    }
     public function DeviceType(){
         $token = "e06a8fd22e0ffc40705f87610d1d5cd6";
         $tokenGk = "b55d5e3d2ab278933faea944d3a867a1";

        $idsite = 2;
        $period = "day";
        $date = "today";
        $format = "json";

        $DeviceType_data = Http::get("http://localhost/matomo/index.php?module=API&method=DevicesDetection.getType&idSite={$idsite}&period={$period}&date={$date}&format={$format}&token_auth={$tokenGk}&force_api_session=1");
        $datas = json_decode($DeviceType_data, true);

 foreach ($datas as $index => $item) {
            $DeviceType = new DeviceType();
            $DeviceType->Devices_type = $datas[$index]["label"];
            $DeviceType->segment = $datas[$index]["segment"];
            //$DeviceType->nb_uniq_visitors = $datas[$index]["nb_uniq_visitors"];
            $DeviceType->nb_visits = $datas[$index]["nb_visits"];
            //$DeviceType->nb_actions = $datas[$index]["nb_actions"];
           // $DeviceType->nb_users = $datas[$index]["nb_users"];
            $DeviceType->logo = $datas[$index]["logo"];
           // $DeviceType->max_actions = $datas[$index]["max_actions"];
           // $DeviceType->sum_visit_length = $datas[$index]["sum_visit_length"];
            //$DeviceType->bounce_count = $datas[$index]["bounce_count"];
           // $DeviceType->nb_visits_converted = $datas[$index]["nb_visits_converted"];
            $DeviceType->segment = $datas[$index]["segment"];

            $DeviceType->save();
        }

    return $datas;
    }
public function ScreenResolution(){
        $token = "e06a8fd22e0ffc40705f87610d1d5cd6";
        $tokenGk = "b55d5e3d2ab278933faea944d3a867a1";
        $idsite = 2;
        $period = "day";
        $date = "today";
        $format = "json";

        $ScreenResolution_data = Http::get("http://localhost/matomo/index.php?module=API&method=Resolution.getResolution&idSite={$idsite}&period={$period}&date={$date}&format={$format}&token_auth={$tokenGk}&force_api_session=1");
        $datas = json_decode($ScreenResolution_data, true);

 foreach ($datas as $index => $item) {
            $ScreenResolution = new ScreenResolution();
           $ScreenResolution->Screens_Resolution = $datas[$index]["label"];
            $ScreenResolution->segment = $datas[$index]["segment"];
            //$ScreenResolution->nb_uniq_visitors = $datas[$index]["nb_uniq_visitors"];
            $ScreenResolution->nb_visits = $datas[$index]["nb_visits"];
            //$ScreenResolution->nb_actions = $datas[$index]["nb_actions"];
           // $ScreenResolution->nb_users = $datas[$index]["nb_users"];
           // $ScreenResolution->logo = $datas[$index]["logo"];
           // $ScreenResolution->max_actions = $datas[$index]["max_actions"];
           // $ScreenResolution->sum_visit_length = $datas[$index]["sum_visit_length"];
            //$ScreenResolution->bounce_count = $datas[$index]["bounce_count"];
           // $ScreenResolution->nb_visits_converted = $datas[$index]["nb_visits_converted"];
            $ScreenResolution->segment = $datas[$index]["segment"];

            $ScreenResolution->save();
    }
    return $datas;
}
public function DeviceModel(){
        $token = "e06a8fd22e0ffc40705f87610d1d5cd6";
         $tokenGk = "b55d5e3d2ab278933faea944d3a867a1";

        $idsite = 2;
        $period = "day";
        $date = "today";
        $format = "json";

        $DeviceModel_data = Http::get("http://localhost/matomo/index.php?module=API&method=DevicesDetection.getModel&idSite={$idsite}&period={$period}&date={$date}&format={$format}&token_auth={$tokenGk}&force_api_session=1");
        $datas = json_decode($DeviceModel_data, true);
         foreach ($datas as $index => $item) {
            $DeviceModel = new DeviceModel();
           $DeviceModel->Devices_Model = $datas[$index]["label"];
            $DeviceModel->segment = $datas[$index]["segment"];
            //$DeviceModel->nb_uniq_visitors = $datas[$index]["nb_uniq_visitors"];
            $DeviceModel->nb_visits = $datas[$index]["nb_visits"];
            //$DeviceModel->nb_actions = $datas[$index]["nb_actions"];
           // $DeviceModel->nb_users = $datas[$index]["nb_users"];
           // $DeviceModel->logo = $datas[$index]["logo"];
           // $DeviceModel->max_actions = $datas[$index]["max_actions"];
           // $DeviceModel->sum_visit_length = $datas[$index]["sum_visit_length"];
            //$DeviceModel->bounce_count = $datas[$index]["bounce_count"];
           // $DeviceModel->nb_visits_converted = $datas[$index]["nb_visits_converted"];
            $DeviceModel->segment = $datas[$index]["segment"];

            $DeviceModel->save();
}
return $datas;
}
}
