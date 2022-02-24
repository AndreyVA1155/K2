<?php

namespace App\Controllers\Admin;

use App\View\View;

class AdminSubscriptionController
{
    public function subscription()
    {
        return new View('admin.admin', ['title' => 'управление подписками']);
    }
}
