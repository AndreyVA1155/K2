RuleSiteController<?php

namespace App\Controllers;

use App\View\View;

/**
 * Class RuleSiteController
 * @package App\Controllers
 */
class RuleSiteController
{
    public function ruleSite()
    {
        $page ='ruleSite';
        return new View('staticPage.staticPage',
            [
                'title' => 'Правила сайта',
                'page' => $page
            ]);
    }
}
