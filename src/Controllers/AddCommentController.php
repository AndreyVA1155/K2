<?php

namespace App\Controllers;

use App\View\View;

class AddCommentController
{
    public function addComment()
    {
        return new View('blogs', ['title' => 'ERROR']);
    }
}
