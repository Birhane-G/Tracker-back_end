<?php

namespace App\Tracker\src\Files;

use App\Tracker\src\Files\TestInterface;
use App\Models\InterfaceTest;

abstract class store
{
    protected $request;

    public function __construct($request)
    {
        $this->request = $request;
    }
    public function setDatas($argument)
    {
       echo "hey";
    }
}
