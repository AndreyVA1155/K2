<?php

namespace App\Controllers\Admin;

use App\View\View;

//контроллер для вывода всех постов
class AdminShowAllPostController
{
    public function getAllPost()
    {
        return new View('admin.admin', ['title' => 'Все посты']);
    }
}
