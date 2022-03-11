<?php

namespace App\Controllers\Admin;

use App\View\View;
use App\Models\Subscription;

//контроллер для изменения подписки
class AdminChangeSubscriptionController
{
    public function changeSubscription()
    {
        return new View('admin.subscription',
            [
                'title' => 'Изменение подписки  '
            ]);
    }
}
