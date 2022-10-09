<?php

namespace App\Models\Test;
use App\Tracker\src\Data\data;

class testimplementation implements data
{
    public function getData($argument = []){
        return $this->$argument;
    }
}