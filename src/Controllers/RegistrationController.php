<?php

namespace App\Controllers;

use App\Models\User;
use App\View\View;

/**
 * Class RegistrationController
 * @package App\Controllers
 */
class RegistrationController
{

    public function registration()
    {
        $error = '';
        if (!isset($_POST['password1'])) {
            $_POST['password1'] = '';
            $_POST['password2'] = '';
            $_POST['name'] = '';
            $_POST['email'] = '';
        }

        if ($_POST['name'] == '') {
            $error = 'имя не введено';
        } elseif ($_POST['email'] == '') {
            $error = 'email не введен';
        } elseif ($_POST['password1'] == '') {
            $error = 'пароль не введен';
        } elseif ($_POST['password2'] == '') {
            $error = 'пароль 2 раз не введен';
        } elseif (($_POST['password1'] != $_POST['password2'])) {
            $error = 'пароли не совпадают';
        } elseif (!isset($_POST['check'])) {
            $error = 'нет отметки о согласии с правилами сайта';
        } else {
            $name = $_POST['name'] ?? '';
            $email = $_POST['email'] ?? '';
            $password = $_POST['password1'] ?? '';
            $newUser = new User();
            $newUser->name = $name;
            $newUser->email = $email;
            $newUser->password = $password;
            $newUser->save();
        }

        return new View('registration.registration',
            [
                'title' => 'Регистрация',
                'error' => $error
            ]);
    }
}
