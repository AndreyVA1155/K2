<?php

namespace App\Controllers;

use App\View\View;

class ErrorController
{
    public function error()
    {
        return new View('errors.error', ['title' => 'ERROR']);
    }
}
