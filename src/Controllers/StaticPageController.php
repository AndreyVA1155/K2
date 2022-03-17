<?php

namespace App\Controllers;

use App\View\View;

/**
 * Class StaticPageController
 * @package App\Controllers
 */
class StaticPageController
{
    public function staticPage()
    {
        return new View('staticPage.staticPage',
            [
                'title' => 'Статичная страница',
                'page' => 'staticPage'
            ]);
    }
}
