<?php

namespace App\Controllers;

use App\View\View;

//контроллер для вывода статичныъ страниц
class StaticPageController
{
    public function staticPage()
    {
        return new View('staticPage.staticPage', ['title' => 'Статичная страница']);
    }
}
