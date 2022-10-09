<?php

namespace App\Tracker\src\Files;

use App\Tracker\src\Data\data;
use App\Tracker\src\Files;
use Illuminate\Support\Facades\Http;
use App\Models\Browser;
use  App\Tracker\src\request\RequestOptions;
class Software extends store
{
    private $data = [];

    public function __construct($argument)
    {
        $this->data = $argument;
    }
    public function Browser($argument = [])
    {
        echo "hey";
    }
}
