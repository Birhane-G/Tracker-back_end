<?php

namespace App\Models\Implement;

use App\Models\InterfaceTest;

class PageInterfaceImp implements InterfaceTest
{
    public function Page(){
        echo "hey";
    }
}