<?php

namespace App\Controllers;

use App\View\View;

//контроллер для регистрации пользователя
class RegistrationController
{

    public function registration()
    {
        $name = $_POST['name'] ?? '';
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        return new View('registration.registration', ['title' => 'Регистрация']);
    }
}
