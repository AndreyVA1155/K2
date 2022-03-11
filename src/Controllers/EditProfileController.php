<?php

namespace App\Controllers;

use App\Models\User;
use App\View\View;

//контроллер для изменения профиля пользователя
class EditProfileController
{

    public function editProfile()
    {
        $profile = 'edit';
        $id = $_SESSION['userId'];
        $user = User::where('id', $id)
            ->first();

        if (isset ($_POST['name'])) {
            $user->name = $_POST['name'] ?? '';
            $user->surname = $_POST['surname'] ?? '';
            $user->email = $_POST['email'] ?? '';
            $user->description = $_POST['description'] ?? '';
            $user->save();
        }

        return new View('profile.profile',
            [
                'title' => 'Личный кабинет',
                'user' => $user,
                'profile' => $profile
            ]);
    }
}
