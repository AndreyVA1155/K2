<?php

namespace App\Controllers\Admin;

use App\View\View;

//контроллер для показа всех коментариев
class AdminShowAllCommentsController
{
    public function showAllComments()
    {
        $page = 'comments';
        return new View('admin.admin',
            [
                'title' => 'Все комментрарии',
                'page' => $page
            ]);
    }
}
