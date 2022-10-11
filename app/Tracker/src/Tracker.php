<?php

namespace App\Tracker\src;

use App\Tracker\src\Files\Software;

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

    public function Device(int $value)
    {
        return "Device";
    }

    public function Location()
    {
        return "Location";
    }
}
