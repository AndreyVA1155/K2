<?php

namespace App\Controllers\Admin;

use App\View\View;

//контроллер для изменений комментария
class AdminCommentsController
{
    public function comment()
    {
        return new View('admin.admin', ['title' => 'Управление коментариями']);
    }
}
