<?php

namespace App\Controllers;

use App\Models\User;
use App\View\View;

//контроллер для вывод профиля пользователя
class ProfileController
{
    public function profile()
    {
        $profile = 'show';
        $id = $_SESSION['userId'];
        $users = User::where('id', $id)
            ->get();

        return new View('profile.profile',
            [
                'title' => 'Личный кабинет',
                'users' => $users,
                'profile' => $profile
            ]);
    }
}
