RuleSiteController<?php

namespace App\Controllers;

use App\View\View;

class RuleSiteController
{
    public function ruleSite()
    {
        return new View('staticPage.staticPage', ['title' => 'правила сайта']);
    }
}
