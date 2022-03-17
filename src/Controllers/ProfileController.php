<?php

namespace App\Controllers;

use App\View\View;
use App\Models\User;

/**
 * Class ProfileController
 * @package App\Controllers
 */
class ProfileController extends AbstractController
{
    public function profile()
    {
        $id = $_SESSION['userId'];
        $id = $_SESSION['userId'];
        $user = User::where('id', $id)->first();
        var_dump($user->name);
        return new View('profile.profile',
            [
                'title' => 'Личный кабинет',
                'user' => $user,
                'profile' => 'show'
            ]);
    }
}
