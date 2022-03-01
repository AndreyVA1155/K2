<?php

namespace App\Controllers\Admin;

use App\View\View;

//контроллер для показа всех статичных страниц
    class AdminShowAllStaticPageController
{
    public function getAllStaticPage()
    {
        return new View('admin.admin', ['title' => 'Все статичные страницы']);
    }
}
