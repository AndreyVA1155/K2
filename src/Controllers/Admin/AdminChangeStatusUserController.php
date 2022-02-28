<?php

namespace App\Controllers\Admin;

use App\View\View;

//контроллер для изменения статуса пользователя
class AdminChangeStatusUserController
{
    public function changeStatusUser()
    {
        return new View('admin.admin', ['title' => 'Изменение статуса пользователя']);
    }
}
