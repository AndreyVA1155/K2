<?php

namespace App\Controllers;

use App\View\View;

//контроллер для авторизации
class AuthorizationController
{
    public function authorization()
    {
        return new View('authorization.authorization', ['title' => 'Авторизация']);
    }
}
