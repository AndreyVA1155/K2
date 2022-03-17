<?php

namespace App\Controllers\Admin;

use App\View\View;

/**
 * Class AdminShowAllStaticPageController
 * @package App\Controllers\Admin
 */
class AdminShowAllStaticPageController
{
    public function getAllStaticPage()
    {
        return new View('admin.admin',
            [
                'title' => 'Все статичные страницы',
                'page' => 'staticPage'
            ]);
    }
}
