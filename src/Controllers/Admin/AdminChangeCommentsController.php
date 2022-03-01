<?php

namespace App\Controllers\Admin;

use App\View\View;

//контроллер для изменений комментария
class AdminChangeCommentsController
{
    public function ChangeComment()
    {
        return new View('admin.admin', ['title' => 'Управление коментариям']);
    }
}
