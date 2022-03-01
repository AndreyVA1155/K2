<?php

namespace App\Controllers\Admin;

use App\View\View;

//контроллер для изменения поста
class AdminChangePostController
{
    public function changePost()
    {
        return new View('admin.admin', ['title' => 'Изменение поста']);
    }
}
