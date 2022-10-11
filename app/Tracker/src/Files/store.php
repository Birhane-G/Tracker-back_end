<?php

namespace App\Tracker\src\Files;

use App\Tracker\src\Files\TestInterface;
<<<<<<< HEAD
// use App\Tracker\src\Files\TestImpl;
class store
{
    protected $request;

    public function __construct($request)
=======

abstract class store
{
    protected $request;

    public function __construct(TestInterface $request)
>>>>>>> ca933c8a601684b3a9c7e3ca9c4cf882b5fa06d2
    {
        $this->request = $request;
    }
    public function setDatas($argument)
    {
<<<<<<< HEAD
        // return new TestInterface();
        // return "hello This is Abstract class";
=======
>>>>>>> ca933c8a601684b3a9c7e3ca9c4cf882b5fa06d2
    }
}
