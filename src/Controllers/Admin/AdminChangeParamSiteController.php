<?php

namespace App\Controllers\Admin;

use App\View\View;
use App\Models\ParamSite;

//контроллер для изменения параметров сайта
class AdminChangeParamSiteController
{
    public function changeParamSite()
    {
        $id = 1;
        $page = 'changeParamSite';
        $limit = ParamSite::where('id', 1)->get();
        if (isset($_POST['upload'])) {
            $param = ParamSite::find($id);
            $param->limit = $_POST['limit'];
            $param->save();
        }

        return new View('admin.admin',
            [
                'title' => 'Изменение параметров сайта',
                'page' => $page,
                'limit' => $limit
            ]);
    }
}
