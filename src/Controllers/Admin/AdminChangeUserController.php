<?php

namespace App\Controllers\Admin;


use App\View\View;
use App\Models\User;
use App\Models\Status;


/**
 * Class AdminChangeUserController
 * @package App\Controllers\Admin
 */
class AdminChangeUserController
{
    public function changesUser()
    {
        $id = $_POST['id'];
        $user = User::where('id', $id)->first();

        $status = Status::all();

        if (isset($_POST['name'])) {
            $user->name = $_POST['name'];
            $user->surname = $_POST['surname'];
            $user->email = $_POST['email'];
            $user->description = $_POST['description'];
            $user->status_user = $_POST['userStatus'];
            $user->save();
        }

        return new View('admin.user',
            [
                'title' => 'Изменение пользователя',
                'id' => $id,
                'user' => $user,
                'status' => $status
            ]);
    }
}
