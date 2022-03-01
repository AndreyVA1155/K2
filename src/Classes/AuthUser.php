<?php

namespace App\Class\AuthUser;

abstract class Auth
{
    public $user;

    public function getIdUser()
    {
        $userId = $_SESSION['id'];
    }
}
