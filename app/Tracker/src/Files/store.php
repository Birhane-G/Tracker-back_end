<?php

namespace App\Tracker\src\Files;

use App\Tracker\src\Files\TestInterface;

abstract class store
{
    protected $request;

    public function __construct($argument)
    {
        $this->request = $argument;
    }
    public function setDatas($argument)
    {
          echo "Hello";

    }
}
