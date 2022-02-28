<?php

namespace App\Controllers\Admin;

use App\View\View;

//админка с ссылками на действия администратора
class AdminController
{
    public function admin()
    {
        return new View('admin.admin', ['title' => 'Админка']);
    }
}
