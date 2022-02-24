<?php

namespace App\Controllers;

use App\View\View;

class StaticPageController
{
    public function staticPage()
    {
        return new View('staticPage.staticPage', ['title' => 'статичная страница']);
    }
}
