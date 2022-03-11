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
        $user = User::where('id', $id)
            ->first();
        $user['status'] = $user->status->name;

        return new View('profile.profile',
            [
                'title' => 'Личный кабинет',
                'user' => $user,
                'profile' => $profile
            ]);
    }


}
