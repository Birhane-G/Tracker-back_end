<?php

namespace App\Tracker\src\Files;
use App\Tracker\src\Implements\PageImp;


class Page
{
      public $request;
      
      public function __construct($request){
            $this->request = $request;
      }
      public function PagePerformance($argument)
      {
         return PageImp::Data($argument);
      }
      public function PageView($argument)
      {
         return PageImp::PageView($argument);
      }
}
