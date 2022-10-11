<?php

namespace App\Tracker\src\Files;
class Software extends store
{
    private $data = [];

    public function __construct($argument)
    {
        $this->data = $argument;
    }
    public function Browser($argument = [])
    {
        $test = $this->setDatas($argument);
<<<<<<< HEAD
        $check = $this->request->Test("hey");
        
        echo $check;
=======
        $this->request->Test($argument);
>>>>>>> ca933c8a601684b3a9c7e3ca9c4cf882b5fa06d2
    }
}
