<?php

namespace App\Tracker\src\Files;
use App\Tracker\src\Files\TestInterface;
class Software extends store
{
    public function Browser($argument)
    {
        // $test = $this->setDatas($argument);
        $test = new TestInterface();
        $test->Test($argument);
        return $argument;
    }
}
