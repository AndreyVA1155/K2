<?php   

namespace App\Controllers;

use App\View\View;
use App\Models\User;

/**
 * Class AuthorizationController
 * @package App\Controllers
 */
class AuthorizationController
{
    public function authorization()
    {
        $user = '';
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        if (isset($_POST['send'])) {
            $user = User::where('email', $email)->first();
                if ($user->email == $email && password_verify($password, $user->password )) {
                    $_SESSION['userId'] = $user->id ;
                    if (isset($user->status->name)) {
                        $_SESSION['status_user'] = $user->status->name;
                    }
                    header('Location: /');

            }
        }
        return new View('authorization.authorization',
            [
                'title' => 'Авторизация',
                'user' => $user
            ]);
    }
}
