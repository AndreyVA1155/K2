<?php

namespace App\Controllers;

use App\Models\User;
use App\View\View;

//контроллер для изменения профиля пользователя
class EditProfileController
{
    public function editProfile()
    {
        var_dump($_POST);
        $profile = 'edit';
        $id = $_SESSION['userId'];
        $users = User::where('id', $id)
            ->get();
//        $users->setName($_POST['name']);
//        $users->surname = $_POST['surname'];
//        $users->email = $_POST['email'];
//        $users->description = $_POST['description'];
//        $users->save();

        return new View('profile.profile',
            [
                'title' => 'Личный кабинет',
                'users' => $users,
                'profile' => $profile
            ]);
    }
}
