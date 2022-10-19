<?php

namespace App\Tracker\src\Files;
use App\Tracker\src\Implements\TestImpl;

class Visitor
{
    public function ChannelType($argument)
    {
       return TestImpl::Test($argument);
    }
}
