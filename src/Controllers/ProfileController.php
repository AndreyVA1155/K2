<?php

namespace App\Controllers;

use App\View\View;
use App\Models\User;

/**
 * Class ProfileController
 * @package App\Controllers
 */
class ProfileController extends AbstractController
{
    public function profile()
    {

        $id = $_SESSION['userId'];
        $user = User::where('id', $id)->first();

        return new View('profile.showProfile',
            [
                'title' => 'Личный кабинет',
                'user' => $user,
                'profile' => 'show'
            ]);
    }
    public function editProfile()
    {
        $id = $_SESSION['userId'];
        $user = User::where('id', $id)
            ->first();

        if (isset ($_POST['name'])) {
            $user->name = $_POST['name'] ?? '';
            $user->surname = $_POST['surname'] ?? '';
            $user->email = $_POST['email'] ?? '';
            $user->description = $_POST['description'] ?? '';
            if (isset($_FILES)) {
                $ext = pathinfo($_FILES['userfile']['name'], PATHINFO_EXTENSION);
                $deleteFiles = $_SERVER['DOCUMENT_ROOT'] . '/image/users/' . $user->name . ' ' . $user->surname . $ext;
                if (@fopen($deleteFiles, "r")) {
                    unlink($deleteFiles);
                }
                $filename = 'account-' . $user->id;
                $path = 'image\users' . '\\';
                $destiation_dir = $_SERVER['DOCUMENT_ROOT'] . '/image/users/' . '/' . $filename;
                move_uploaded_file($_FILES['userfile']['tmp_name'], $destiation_dir . '.' . $ext);
                $_FILES['uploadFoto']['name'] = $filename;
                $user->avatar = $filename;
                $user->avatar_path = $path . $filename . '.jpg';
                $user->save();
            }
        }

        return new View('profile.editProfile',
            [
                'title' => 'Личный кабинет',
                'user' => $user,
                'profile' => 'edit'
            ]);
    }
}
