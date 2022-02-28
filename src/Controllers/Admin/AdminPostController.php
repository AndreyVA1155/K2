<?php

namespace App\Controllers\Admin;

use App\View\View;

//контроллер для вывода всех постов
class AdminPostController
{
    public function post()
    {
        return new View('admin.admin', ['title' => 'все посты']);
    }
}
