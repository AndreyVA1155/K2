<?php

namespace App\Controllers\Admin;

use App\View\View;

/**
 * Class AdminChangeStaticPageController
 * @package App\Controllers\Admin
 */
class AdminChangeStaticPageController
{
    public function changeStaticPage()
    {
        return new View('admin.admin',
            [
                'title' => 'Изменение статичной страницы'
            ]);
    }
}
