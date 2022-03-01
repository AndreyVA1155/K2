<?php

namespace App\Controllers\Admin;

use App\View\View;

//контроллер для показа всех коментариев
class AdminShowAllCommentsController
{
    public function showAllComments()
    {
        return new View('admin.admin', ['title' => 'Все комментраии']);
    }
}
