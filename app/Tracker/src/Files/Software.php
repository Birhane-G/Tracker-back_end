<?php

namespace App\Tracker\src\Files;
use App\Tracker\src\Implements\SoftwareImp;

class Software
{
    public function Browser($argument)
    {
       return SoftwareImp::Data($argument);
    }
    public function Os($argument)
    {
       return SoftwareImp::Data($argument);
    }
    public function plugin($argument)
    {
       return SoftwareImp::Data($argument);
    }
    public function engine($argument)
    {
       return SoftwareImp::Data($argument);
    }
}
