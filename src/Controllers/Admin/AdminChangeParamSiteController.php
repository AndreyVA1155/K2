<?php

namespace App\Controllers\Admin;

use App\View\View;

//контроллер для изменения параметров сайта
class AdminChangeParamSiteController
{
    public function changeParamSite()
    {
        $page = 'changeParamSite';
        return new View('admin.admin',
            [
                'title' => 'Изменение параметров сайта',
                'page' => $page
            ]);
    }
}
