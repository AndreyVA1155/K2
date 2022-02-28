<?php

namespace App\Controllers;

use App\View\View;

//контроллер для добавления комментрария
class AddCommentController
{
    public function addComment()
    {
        return new View('blogs', ['title' => 'Дообавление комментария']);
    }
}
