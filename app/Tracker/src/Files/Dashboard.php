<?php

namespace App\Tracker\src\Files;
use App\Tracker\src\Implements\DashboardImp;

class Dashboard
{
    public function PopularPage($argument)
    {
       return DashboardImp::Visitors($argument);
    }
    public function Visitors($argument)
    {
       return DashboardImp::Visitors($argument);
    }
    public function Actions($argument)
    {
       return DashboardImp::Visitors($argument);
    }
    public function VisitorOverDay($argument)
    {
       return DashboardImp::Overday($argument);
    }

}
