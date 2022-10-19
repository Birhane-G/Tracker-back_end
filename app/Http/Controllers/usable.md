We use this when we need to store the information

-----------Browser-----------------
 // foreach ($datas as $index => $item) {
        //     // echo $datas[$index]['label'];
        //     $Browser = new Browser();
        //     $Browser->Browser_name = $datas[$index]["label"];
        //     $Browser->nb_uniq_visitors = $datas[$index]["nb_uniq_visitors"];
        //     $Browser->nb_visits = $datas[$index]["nb_visits"];
        //     $Browser->nb_actions = $datas[$index]["nb_actions"];
        //     $Browser->nb_users = $datas[$index]["nb_users"];
        //     $Browser->max_actions = $datas[$index]["max_actions"];
        //     $Browser->sum_visit_length = $datas[$index]["sum_visit_length"];
        //     $Browser->bounce_count = $datas[$index]["bounce_count"];
        //     $Browser->nb_visits_converted = $datas[$index]["nb_visits_converted"];
        //     $Browser->logo = $datas[$index]["logo"];
        //     $Browser->segment = $datas[$index]["segment"];
        //     $Browser->save();
        // }
-------------------OS---------------
    
    //     foreach ($datas as $index => $item) {
    //         // echo $datas[$index]['label'];
    //         $operatingsystem = new operatingsystem();
    //         $operatingsystem->os_name = $datas[$index]["label"];
    //         $operatingsystem->nb_uniq_visitors = $datas[$index]["nb_uniq_visitors"];
    //         $operatingsystem->nb_visits = $datas[$index]["nb_visits"];
    //         $operatingsystem->nb_actions = $datas[$index]["nb_actions"];
    //         $operatingsystem->nb_users = $datas[$index]["nb_users"];
    //         $operatingsystem->max_actions = $datas[$index]["max_actions"];
    //         $operatingsystem->sum_visit_length = $datas[$index]["sum_visit_length"];
    //         $operatingsystem->bounce_count = $datas[$index]["bounce_count"];
    //         $operatingsystem->nb_visits_converted = $datas[$index]["nb_visits_converted"];
    //         $operatingsystem->logo = $datas[$index]["logo"];
    //         $operatingsystem->save();
    //     }

    //  return $datas;
------------------ plugin--------------------

    //     $os_data = Http::get("http://localhost/matomo/index.php?module=API&method=DevicePlugins.getPlugin&idSite=1&period={$period}&date={$date}&format={$format}&token_auth={$token}&force_api_session=1");
    //     $datas = json_decode($os_data, true);

    //     foreach ($datas as $index => $item) {
    //         // echo $datas[$index]['label'];
    //         $plugin = new plugin();
    //         $plugin->plugins_name = $datas[$index]["label"];
    //         $plugin->nb_visits = $datas[$index]["nb_visits"];
    //         $plugin->nb_visits_percentage = $datas[$index]["nb_visits_percentage"];
    //         $plugin->logo = $datas[$index]["logo"];
    //         $plugin->save();
    //     }

    //  return $datas;

    ------------Engine-----------------

    //     $os_data = Http::get("http://localhost/matomo/index.php?module=API&method=DevicesDetection.getBrowserEngines&idSite=1&period={$period}&date={$date}&format={$format}&token_auth={$token}&force_api_session=1");
    //     $datas = json_decode($os_data, true);

    //     foreach ($datas as $index => $item) {
    //         // echo $datas[$index]['label'];
    //         $engine = new engine();
    //         $engine->engines_name = $datas[$index]["label"];
    //         $engine->nb_uniq_visitors = $datas[$index]["nb_uniq_visitors"];
    //         $engine->nb_visits = $datas[$index]["nb_visits"];
    //         $engine->nb_actions = $datas[$index]["nb_actions"];
    //         $engine->nb_users = $datas[$index]["nb_users"];
    //         $engine->max_actions = $datas[$index]["max_actions"];
    //         $engine->sum_visit_length = $datas[$index]["sum_visit_length"];
    //         $engine->bounce_count = $datas[$index]["bounce_count"];
    //         $engine->nb_visits_converted = $datas[$index]["nb_visits_converted"];
    //         $engine->segment = $datas[$index]["segment"];

    //         $engine->save();
    //     }

    //  return $datas;

    -----Device--

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

        //    $argument = [
//       'method' => 'Actions.getPageUrls',
//       'idSite' => 1,
//       'period' => 'day',
//       'date' => 'today',
//       'token' => '3e7cd2087d85ab33492ac570db70ab7c',
//       'format' => 'json'
//    ];
//    $test = Tracker::getPages()->PageView($argument);
//    return response()->json([
//       'status' => 200,
//       'value' => $test
//    ]);