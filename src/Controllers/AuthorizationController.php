<?php

namespace App\Controllers;

use App\View\View;

class AuthorizationController
{
    public function authorization()
    {
        return new View('authorization.authorization', ['title' => 'авторизация']);
    }
}
