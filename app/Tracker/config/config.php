<?php

return [

    /*
     *  Server URL
     */
    'Tracker_url'     => 'http://localhost/matomo/index.php?module=API&method=API.getReportPagesMetadata&idSite=1&format=JSON&token_auth=2a2465d31f6e8e4a62079bfddf29ef24&force_api_session=1',

    /*
     *  Optional API Key (will be used instead of Username and Password)
     *  The bundle works much faster with the API Key, rather than username and password.
     */

    'api_key'       => '',

    /*
     *  Format for API calls to be returned in
     *
     *  Can be [php, xml, json, html, rss, original]
     *
     *  The default is 'json'
     */
    'format'        => 'json',

    /*
     *  Period/Date range for results
     *
     *  Can be [today, yesterday, previous7, previous30, last7, last30, currentweek, currentmonth, currentyear]
     *  as well as a date range in the format of "yyyy-MM-dd,yyyy-MM-dd"
     *
     *  The default is 'yesterday'
     */
    'period'        => 'yesterday',

    /*
     *  The Site ID you want to use
     */
    'site_id'       => '1',
];
