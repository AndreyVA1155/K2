<?php

namespace App\Controllers\Admin;

use App\View\View;

class AdminCommentsController
{
    public function comment()
    {
        return new View('admin.admin', ['title' => 'управление коментариями']);
    }
}
