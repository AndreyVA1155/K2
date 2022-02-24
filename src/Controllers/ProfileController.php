<?php

namespace App\Controllers;

use App\Class\AuthUserser\Auth;
use App\View\View;

class ProfileController extends Auth
{
    public function profile()
    {
        return new View('profile.profile', ['title' => 'личный кабинет']);
    }
}
