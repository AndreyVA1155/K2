<?php

namespace App\Controllers\Admin;

use App\View\View;

/**
 * Class AdminController
 * @package App\Controllers\Admin
 */
class AdminController
{
    public function admin()
    {
        return new View('admin.admin',
            [
                'title' => 'Админка',
                'page' => 'main'
            ]);
    }
}
