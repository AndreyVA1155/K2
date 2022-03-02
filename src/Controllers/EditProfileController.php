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
        $users = User::where('id', $id)
            ->get();

        //$user = User::updateOrCreate([
            //'name' => $_POST['name'],
            //'surname' => $_POST['surname'],
            //'email' => $_POST['email'],
            //'description' => $_POST['description']
        //]);
        //$user->save();

        return new View('profile.profile',
            [
                'title' => 'Личный кабинет',
                'users' => $users,
                'profile' => $profile
            ]);
    }
}
