<?php

namespace App\Controllers\Admin;

use App\View\View;

class AdminPostController
{
    public function post()
    {
        return new View('admin.admin', ['title' => 'управление постами']);
    }
}
