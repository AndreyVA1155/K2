<?php

namespace App\Controllers\Admin;

use App\View\View;
use App\Models\Subscription;

/**
 * Class AdminShowAllSubscriptionController
 * @package App\Controllers\Admin
 */
class AdminShowAllSubscriptionController
{
    public function showAllSubscription()
    {
        $limit = 10; //максимальное количество подписок на странице
        $subscriptions = Subscription::all();
        if (intdiv(count($subscriptions), $limit) == 0) {
            $countPages = intdiv(count($subscriptions), $limit);
        } else {
            $countPages = intdiv(count($subscriptions), $limit) + 1;
        }

        return new View('admin.admin',
            [
                'title' => 'Все подписки',
                'subscriptions' => $subscriptions,
                'page' => 'subscription'
            ]);
    }
}
