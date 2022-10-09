<?php

namespace App\Tracker\src\Files;
use App\Tracker\src\Files\TestInterface;
// use App\Tracker\src\Files\TestImpl;
class store
{
    protected $request;

    public function __construct($request)
    {
        $this->request = $request;
    }
    public function setDatas($argument)
    {
        // return new TestInterface();
        // return "hello This is Abstract class";
    }

}