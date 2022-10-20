<?php

namespace App\Tracker\src;

use App\Tracker\src\Files\Software;
use App\Tracker\src\Files\Location;
use App\Tracker\src\Files\Page;
use App\Tracker\src\Files\Device;
use App\Tracker\src\Files\Visitor;
use App\Tracker\src\Files\Dashboard;

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

    public function getPages()
    {
        return new Page($this->argument);
    }

    public function getDevice()
    {
        return new Device($this->argument);
    }
    public function getVisitor()
    {
        return new Visitor($this->argument);
    }
    public function getDashboard()
    {
        return new Dashboard($this->argument);
    }
    
}
