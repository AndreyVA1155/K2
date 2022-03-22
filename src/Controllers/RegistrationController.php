<?php

namespace App\Controllers;

use App\Models\User;
use App\View\View;

//контроллер для регистрации пользователя
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

        if (isset($_POST['registration'])) {
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
                $password = password_hash($_POST['password1'], PASSWORD_DEFAULT) ?? '';//
                $userName = User::where('name', $name)->first();
                $userEmail = User::where('email', $email)->first();
                if (isset($userName->name) || isset($userEmail->email)) {
                    $error = 'пользователь с таким именем или email уже есть в БД';
                } else {
                    $newUser = new User();
                    $newUser->name = $name;
                    $newUser->email = $email;
                    $newUser->password = $password;
                    $newUser->status_user = 4;
                    $newUser->save();
                    $error = 'пользователь зарегистирован';
                }
            }
        }

        return new View('registration.registration',
            [
                'title' => 'Регистрация',
                'error' => $error
            ]);
    }
}
