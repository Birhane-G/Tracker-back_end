<?php

namespace App\Tracker\src\Files;
use App\Tracker\src\Implements\TestImpl;
use App\Models\InterfaceTest;

class Page
{
      public $request;
      
      public function __construct($request){
            $this->request = $request;
      }
      public function PagePerformance($argument)
      {
         return TestImpl::Test($argument);
      }
      public function PageView($argument)
      {
         return TestImpl::Test($argument);
      }
}
