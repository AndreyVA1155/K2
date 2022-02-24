<?php

namespace App\Controllers;

use App\View\View;

class RegistrationController
{
    public function registration()
    {
        return new View('registration.registration', ['title' => 'регистрация']);
    }
}
