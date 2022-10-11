<?php

namespace App\Tracker\src\Implements;

use App\Tracker\src\Files\TestInterface;
class TestImpl implements TestInterface
{
public static function Test($argument)
    {
        echo "Some Text";
    }
}