<?php

namespace App\Controllers\Admin;

use App\View\View;

//контроллер для изменения статичной страницы
class AdminChangeStaticPageController
{
    public function changeStaticPage()
    {
        return new View('admin.admin', ['title' => 'Изменение статичной страницы']);
    }
}
