<?php

namespace App\Tracker\src\Files;
use App\Tracker\src\Implements\LocationImp;

class Location
{
    public function Country($argument)
    {
       return LocationImp::CountryData($argument);
    }
    public function Continent($argument)
    {
       return LocationImp::CRC($argument);
    }
    public function Region($argument)
    {
       return LocationImp::CRC($argument);
    }
    public function City($argument)
    {
       return LocationImp::CRC($argument);
    }
}
