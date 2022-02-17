<?php

namespace App\Controllers;

use App\View\View;

class TestingController
{
    public function testing()
    {
        return new View('test.test', ['title' => 'Тестовая страница']);
    }
}
