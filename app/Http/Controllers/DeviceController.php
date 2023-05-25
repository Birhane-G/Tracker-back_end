<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\DeviceBrand;
use App\Models\DeviceType;
use App\Models\ScreenResolution;
use App\Models\DeviceModel;
use App\Tracker\src\Facades\Tracker;

class DeviceController extends Controller
{
    public function DeviceBrand(){
        $argument = [
            'method' => 'DevicesDetection.getBrand',
            'idSite' => 1,
            'period' => 'day',
            'date' => Date("Y-m-d"),
            'token' => 'df7e214c48d7abbda4d2fec42b857175',
            'format' => 'json'
         ];
         $test = Tracker::getDevice()->DeviceBrand($argument);
         return response()->json([
            'status' => 200,
            'value' => $test
         ]);
    }
     public function DeviceType(){
        $argument = [
            'method' => 'DevicesDetection.getType',
            'idSite' => 1,
            'period' => 'day',
            'date' => Date("Y-m-d"),
            'token' => 'a8e9c9a5540f44cf0eb1756b9feacfb0',
            'format' => 'json'
         ];
         $test = Tracker::getDevice()->DeviceType($argument);
         return response()->json([
            'status' => 200,
            'value' => $test
         ]);
    }
public function ScreenResolution(){
    $argument = [
        'method' => 'Resolution.getResolution',
        'idSite' => 1,
        'period' => 'day',
        'date' => Date("Y-m-d"),
        'token' => 'a8e9c9a5540f44cf0eb1756b9feacfb0',
        'format' => 'json'
     ];
     $test = Tracker::getDevice()->ScreenResolution($argument);
     return response()->json([
        'status' => 200,
        'value' => $test
     ]);
}
public function DeviceModel(){
    $argument = [
        'method' => 'DevicesDetection.getModel',
        'idSite' => 1,
        'period' => 'day',
        'date' => Date("Y-m-d"),
        'token' => 'a8e9c9a5540f44cf0eb1756b9feacfb0',
        'format' => 'json'
     ];
     $test = Tracker::getDevice()->DeviceModel($argument);
     return response()->json([
        'status' => 200,
        'value' => $test
     ]);
}
}