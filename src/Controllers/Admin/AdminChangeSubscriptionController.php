<?php

namespace App\Controllers\Admin;

use App\View\View;
use App\Models\Subscription;

/**
 * Class AdminChangeSubscriptionController
 * @package App\Controllers\Admin
 */
class AdminChangeSubscriptionController
{
    public function changeSubscription()
    {
        $id = $_POST['id'];
        $subsription = Subscription::where('id', $id)->first();
        if (isset($subsription['changeSubscriptionEmail'])) {
            if (isset($_POST['email'])) {
                $subsription->email = $_POST['email'];
                $subsription->save();
            }
        }

        return new View('admin.subscription',
            [
                'title' => 'Изменение подписки  ',
                'subsription' => $subsription
            ]);
    }
}
