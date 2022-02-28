<?php

namespace App\Controllers;

use App\Models\User;
use App\View\View;

//контроллер для вывод профиля пользователя
class ProfileController
{
    public function profile()
    {
        $users = User::where('name', 'ivan')
            ->get();

        return new View('profile.profile',
            [
                'title' => 'Личный кабинет',
                'users' => $users
            ]);
    }
}
