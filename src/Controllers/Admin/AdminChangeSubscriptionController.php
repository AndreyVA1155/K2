<?php

namespace App\Controllers\Admin;

use App\View\View;

//контроллер для изменения подписки
class AdminChangeSubscriptionController
{
    public function changeSubscription()
    {
        return new View('admin.admin', ['title' => 'Изменение подписки  ']);
    }
}
