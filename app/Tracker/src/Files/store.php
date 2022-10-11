<?php

namespace App\Tracker\src\Files;

use App\Tracker\src\Files\TestInterface;

abstract class store
{
    protected $request;

    public function __construct(TestInterface $request)
    {
        $this->request = $argument;
    }
    public function setDatas($argument)
    {

   echo "Hello";

    }
}
