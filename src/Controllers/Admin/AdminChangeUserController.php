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
        $user1 = User::where('id', $id)->first();

        $status = Status::all();

        if (isset($_POST['name'])) {
            $user1->name = $_POST['name'];
            $user1->surname = $_POST['surname'];
            $user1->email = $_POST['email'];
            $user1->description = $_POST['description'];
            $user1->status_user = $_POST['userStatus'];
            $user1->save();
        }

        if (isset($_POST['deleteUser'])) {
            $user1->delete();
            header('Location: /admin/allUsers');
        }

        return new View('admin.user',
            [
                'title' => 'Изменение пользователя',
                'id' => $id,
                'user1' => $user1,
                'status' => $status
            ]);
    }
}
