<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestTracker extends Controller
{
    public function Test(){
        $dataTable = $this->getDataTable('DevicesDetection_osVersions');

        $segments = ['operatingSystemCode', 'operatingSystemVersion'];
        $dataTable->filter('AddSegmentByLabel', [$segments, Archiver::BROWSER_SEPARATOR]);
        $dataTable->filter('ColumnCallbackAddMetadata', ['label', 'logo', __NAMESPACE__ . '\getOsLogo']);
        $dataTable->filter('GroupBy', ['label', __NAMESPACE__ . '\getOsFullName']);
        return $dataTable;    
    }
}
