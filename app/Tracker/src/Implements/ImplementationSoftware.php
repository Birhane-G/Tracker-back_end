<?php

namespace Tracker\src\Implements;
use App\Tracker\src\Files\Software;

class ImplementationSoftware implements Software
{
    public function Browser($argument=[])
    {
        echo "Hey It's Working, Nice Birhane";
    }
}