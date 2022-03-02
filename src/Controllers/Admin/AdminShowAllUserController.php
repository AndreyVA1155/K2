<?php

namespace App\Controllers\Admin;

use App\View\View;

//контроллер для получения всех пользователей
class AdminShowAllUserController
{
    public function getAllUsers()
    {
        $page = 'users';
        return new View('admin.admin',
            [
                'title' => 'Все пользователи',
                'page' => $page
            ]);
    }
}
