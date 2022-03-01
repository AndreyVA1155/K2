<?php

namespace App\Controllers\Admin;

use App\View\View;

//контроллер для изменения пользователя
class AdminChangeUserController
{
    public function changesUser()
    {
        return new View('admin.admin', ['title' => 'Изменение пользователя']);
    }
}
