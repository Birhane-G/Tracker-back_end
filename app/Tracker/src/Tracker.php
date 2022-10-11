<?php

namespace App\Tracker\src;

use App\Tracker\src\Files\Software;
use App\Tracker\src\Files\Location;

class Tracker
{
    public $argument;

    public function __construct($argument){

            $this->argument = $argument;
    }
 
    public function getSoftware()
    {
        return new Software($this->argument);
    }


    public function getLocation()
    {
        return new Location($this->argument);
    }

    public function Device(int $value)
    {
        
    }
}
