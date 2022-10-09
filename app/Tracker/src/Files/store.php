<?php

namespace App\Tracker\src\Files;
use App\Tracker\src\Data\data;
use App\Tracker\src\request\RequestOptions;
abstract class store
{
    protected $idsite;
    protected $period;
    protected $date;
    protected $format;
    protected $request;

    
    public function setArguments($argument)
    {
        $this->idSite = $argument['idSite'];
        $this->period = $argument['period'];
        $this->date = $argument['date'];
        $this->format = $argument['format'];
    }

}