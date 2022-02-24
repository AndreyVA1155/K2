<?php

namespace App\Controllers\Admin;

use App\View\View;

class AdminController
{
    public function admin()
    {
        return new View('admin.admin', ['title' => 'админка']);
    }
}
