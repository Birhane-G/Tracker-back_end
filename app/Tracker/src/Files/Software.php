<?php

namespace App\Tracker\src\Files;
use App\Tracker\src\Files\TestInterface;
use App\Tracker\src\Implements\TestImpl;
class Software extends store
{
    public function Browser($argument)
    {
       return TestImpl::Test($argument);
    }
    public function Os($argument)
    {
       return TestImpl::Test($argument);
    }
    public function plugin($argument)
    {
       return TestImpl::Test($argument);
    }
    public function engine($argument)
    {
       return TestImpl::Test($argument);
    }
}
