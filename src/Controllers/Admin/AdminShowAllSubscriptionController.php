<?php

namespace App\Controllers\Admin;

use App\View\View;
use App\Models\Subscription;

//контроллер для показа всех подписок
class AdminShowAllSubscriptionController
{
    public function showAllSubscription()
    {
        $subscriptions = Subscription::all();
        foreach ($subscriptions as $subscription) {
            if (isset($subscription->user->name)) {
                $subscription['name'] = $subscription->user->name;
                $subscription['surname'] = $subscription->user->surname;
                $subscription['email'] = $subscription->user->email;
            } else {
                $subscription['email'] = $subscription->email;
            }
        }
        $page = 'subscription';

        return new View('admin.admin',
            [
                'title' => 'Все подписки',
                'subscriptions' => $subscriptions,
                'page' => $page
            ]);
    }
}
