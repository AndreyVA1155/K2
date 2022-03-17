<?php

namespace App\Controllers;

use App\Models\User;
use App\View\View;

/**
 * Class EditProfileController
 * @package App\Controllers
 */
class EditProfileController
{

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
                $deleteFiles = $_SERVER['DOCUMENT_ROOT'] . '/image/users/' . $user->name . ' ' . $user->surname . '.jpg';
                unlink($deleteFiles);
                $filename = $user->name . ' ' . $user->surname . '.jpg';
                $path = 'image\users' . '\\';
                $destiation_dir = $_SERVER['DOCUMENT_ROOT'] . '/image/users/' . '/' . $filename;
                move_uploaded_file($_FILES['userfile']['tmp_name'], $destiation_dir);
                $_FILES['uploadFoto']['name'] = $filename;
                $user->avatar = $user->name . ' ' . $user->surname;
                $user->avatar_path = $path . $filename . '.jpg';
                $user->save();
            }
        }

        return new View('profile.profile',
            [
                'title' => 'Личный кабинет',
                'user' => $user,
                'profile' => 'edit'
            ]);
    }
}
