<?php

namespace App\Tracker\src\Files;
use App\Tracker\src\Implements\TestImpl;

class Location extends store
{
    public function Country($argument)
    {
       return TestImpl::Test($argument);
    }
    public function Continent($argument)
    {
       return TestImpl::Test($argument);
    }
    public function Region($argument)
    {
       return TestImpl::Test($argument);
    }
    public function City($argument)
    {
       return TestImpl::Test($argument);
    }
}
