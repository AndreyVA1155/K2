<?php

namespace App\Controllers;

use App\View\View;
use App\Models\User;

//контроллер для авторизации
class AuthorizationController
{
    public function authorization($user)
    {
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        if (isset($_POST['send'])) {
            $user = User::where('email', $email)
                ->get();
        }
        return new View('authorization.authorization',
            [
                'title' => 'Авторизация',
                'user' => $user
            ]);
    }
}

