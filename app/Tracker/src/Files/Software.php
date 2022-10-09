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
        $check = $this->request->Test("hey");
        
        echo $check;
    }
}
