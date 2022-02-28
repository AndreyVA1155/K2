<?php

namespace App\Controllers;

use App\View\View;

//контроллер для регистрации пользователя
class RegistrationController
{
    public function registration()
    {
        return new View('registration.registration', ['title' => 'Регистрация']);
    }
}
