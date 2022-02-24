<?php

namespace App\Controllers\Admin;

use App\View\View;

class AdminAllUserController
{
    public function getAllUsers()
    {
        return new View('admin.admin', ['title' => 'админка']);
    }
}
