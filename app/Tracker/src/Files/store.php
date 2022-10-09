<?php

namespace App\Tracker\src\Files;
use App\Tracker\src\Files\TestInterface;
use App\Tracker\src\Files\TestImpl;
abstract class store
{
    protected $TestInterface;

    public function setDatas($argument)
    {
        return new TestInterface();
    }

}