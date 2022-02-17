<?php

namespace App\Controllers;

use App\View\View;

class HomeController
{
    public function homepage()
    {
        return new View('homepage.homepage', ['title' => 'Главная страница']);
    }
}
