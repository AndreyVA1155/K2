<?php

namespace App\Controllers\Admin;

use App\View\View;
use App\Models\ParamSite;

/**
 * Class AdminChangeParamSiteController
 * @package App\Controllers\Admin
 */
class AdminChangeParamSiteController
{
    public function changeParamSite()
    {
        $limit = ParamSite::where('id', 1)->first();
        if (isset($_POST['limit'])) {
            $param = ParamSite::where('id', 1)->first();
            $param->limit = $_POST['limit'];
            $param->save();
            header('Location: /admin/changeParamSite');
        }

        return new View('admin.admin',
            [
                'title' => 'Изменение параметров сайта',
                'page' => 'changeParamSite',
                'limit' => $limit
            ]);
    }
}

