<?php

namespace App\Tracker\src\Files;
use App\Tracker\src\Implements\VisitorImp;

class Visitor
{
    public function ChannelType($argument)
    {
       return VisitorImp::Data($argument);
    }
    public function Live($argument)
    {
       return VisitorImp::LiveData($argument);
    }
    public function Log($argument)
    {
       return VisitorImp::Data($argument);
    }
}
