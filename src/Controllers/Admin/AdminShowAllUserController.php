<?php

namespace App\Controllers\Admin;

use App\View\View;
use App\Models\User;

/**
 * Class AdminShowAllUserController
 * @package App\Controllers\Admin
 */
class AdminShowAllUserController
{
    public function getAllUsers()
    {
        $limit = 10; //максимальное количество пользователей на странице
        $users = User::all();
        foreach ($users as $user) {
            if (isset($user['status'])) {
                $user['status'] = $user->status->name;
            }
        }
        if (intdiv(count($users), $limit) == 0) {
            $countPages = intdiv(count($users), $limit);
        } else {
            $countPages = intdiv(count($users), $limit) + 1;
        }

        return new View('admin.admin',
            [
                'title' => 'Все пользователи',
                'users' => $users,
                'page' => 'users'
            ]);
    }
}
