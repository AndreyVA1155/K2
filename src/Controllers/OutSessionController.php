<?php

namespace App\Controllers;

use App\View\View;

/**
 * Class OutSessionController
 * @package App\Controllers
 */
class OutSessionController
{
    public function outSession()
    {
        if (isset($_SESSION)) {
            session_destroy();
            header('Location: /');
        }

        return new View('outSession.outSession',
            [
                'title' => 'Сессия закрыта',
            ]);
    }
}
