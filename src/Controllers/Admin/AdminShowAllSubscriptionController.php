<?php

namespace App\Controllers\Admin;

use App\View\View;

//контроллер для показа всех подписок
class AdminShowAllSubscriptionController
{
    public function showAllSubscription()
    {
        $page = 'subscription';
        return new View('admin.admin',
            [
                'title' => 'Все подписки',
                'page' => $page
            ]);
    }
}
