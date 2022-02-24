<?php

namespace App\Controllers\Admin;

use App\View\View;

class AdminChangeStatusUserController
{
    public function changeStatusUser()
    {
        return new View('admin.admin', ['title' => 'изменение статуса пользователя']);
    }
}
