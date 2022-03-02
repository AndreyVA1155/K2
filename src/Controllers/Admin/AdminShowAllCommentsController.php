<?php

namespace App\Controllers\Admin;

use App\Models\Comment;
use App\View\View;

//контроллер для показа всех коментариев
class AdminShowAllCommentsController
{
    public function showAllComments()
    {
        $comments = Comment::where(null)
            ->get();
        $page = 'comments';
        return new View('admin.admin',
            [
                'title' => 'Все комментрарии',
                'page' => $page,
                'Comments' => $comments
            ]);
    }
}
