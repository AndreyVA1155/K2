<?php

namespace App\Controllers\Admin;

use App\View\View;
use App\Models\User;

//контроллер для получения всех пользователей
class AdminShowAllUserController
{
    public function getAllUsers()
    {
        $limit = 10; //максимальное количество пользователей на странице
        $users = User::all();
        foreach ($users as $user) {
            $user['status'] = $user->status->name;
        }
        if (intdiv(count($users), $limit) == 0) {
            $pages = intdiv(count($users), $limit);
        } else {
            $pages = intdiv(count($users), $limit) + 1;
        }
        $page = 'users';
        return new View('admin.admin',
            [
                'title' => 'Все пользователи',
                'users' => $users,
                'page' => $page
            ]);
    }
}
