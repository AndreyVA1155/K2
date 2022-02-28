RuleSiteController<?php

namespace App\Controllers;

use App\View\View;

//контроллер с правилами сайта
class RuleSiteController
{
    public function ruleSite()
    {
        return new View('staticPage.staticPage', ['title' => 'Правила сайта']);
    }
}
