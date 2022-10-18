<?php

namespace App\Tracker\src\Files;
use App\Tracker\src\Implements\TestImpl;

class Page extends store
{
    public function PagePerformance($argument)
    {
       return TestImpl::Test($argument);
    }
    public function Pageview($argument)
    {
       return TestImpl::Test($argument);
    }
}
