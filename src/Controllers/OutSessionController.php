<?php

namespace App\Controllers;

use App\View\View;

class OutSessionController
{
    public function outSession()
    {
        if (isset($_SESSION)) {
            session_destroy();
<<<<<<< HEAD
            header('Location: /');
=======
>>>>>>> origin/main
        }

        return new View('outSession.outSession',
            [
                'title' => 'Сессия закрыта',
            ]);
    }
}
