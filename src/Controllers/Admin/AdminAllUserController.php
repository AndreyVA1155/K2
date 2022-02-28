<?php

namespace App\Controllers\Admin;

use App\View\View;

//контроллер для получения всех пользователей
class AdminAllUserController
{
    public function getAllUsers()
    {
        return new View('admin.admin', ['title' => 'Админка']);
    }
}
