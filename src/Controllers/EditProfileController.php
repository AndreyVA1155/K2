<?php

namespace App\Controllers;

use App\Models\User;
use App\View\View;

//контроллер для изменения профиля пользователя
class EditProfileController
{
    public function editProfile()
    {
        $users = User::where('name', 'ivan')
            ->get();

        return new View('profile.profile',
            [
                'title' => 'Изменение личных данных',
                'users' => $users
            ]);
    }
}
