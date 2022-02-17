<?php

namespace App\Controllers;

use App\View\View;

class StaticPageController1
{
    public function test($param1, $param2)
    {
        $x = "Test Page With param1=$param1 param2=$param2";
        return new View('testing.testing', ['text' => $x]);
    }
}