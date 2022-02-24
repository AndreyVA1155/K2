<?php

namespace App\Controllers;

use App\Class\AuthUserser\Auth;
use App\View\View;

class ChangeStatusSubscribeController
{
    public function changeStatusSubscribe()
    {
        return new View('changeStatusSubscribe.changeStatusSubscribe', ['title' => 'Главная страница']);
    }
}
