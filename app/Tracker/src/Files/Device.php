<?php

namespace App\Tracker\src\Files;
use App\Tracker\src\Implements\DeviceImp;

class Device
{
    public function DeviceBrand($argument)
    {
       return DeviceImp::Data($argument);
    }
    public function DeviceType($argument)
    {
       return DeviceImp::Data($argument);
    }
    public function ScreenResolution($argument)
    {
       return DeviceImp::Data($argument);
    }
    public function DeviceModel($argument)
    {
       return DeviceImp::Data($argument);
    }
}
