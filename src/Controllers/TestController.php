<?php

namespace App\Controllers;

use App\View\View;
use App\Models\User;


class TestController
{
    public function test()
    {
        $users = User::all();

        return new View('test.test',
            [
                'title' => 'TEST',
                'users' => $users
            ]);
    }
}
