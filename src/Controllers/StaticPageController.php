<?php

namespace App\Controllers;

use App\View\View;

class StaticPageController
{
    public function about()
    {
        return new View('about.about', ['title' => 'Страница о нас']);
    }
}
