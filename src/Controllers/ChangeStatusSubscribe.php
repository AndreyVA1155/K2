<?php

namespace App\Controllers;

use App\View\View;

//контроллер для изменения статуса подписки
class ChangeStatusSubscribeController
{
    public function changeStatusSubscribe()
    {
        return new View('changeStatusSubscribe.changeStatusSubscribe', ['title' => 'Главная страница']);
    }
}
