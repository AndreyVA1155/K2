<?php

namespace App\Controllers\Admin;

use App\Models\Comment;
use App\View\View;

/**
 * Class AdminShowAllCommentsController
 * @package App\Controllers\Admin
 */
class AdminShowAllCommentsController
{
    public function showAllComments()
    {
        $comments = Comment::all();

        return new View('admin.admin',
            [
                'title' => 'Все комментрарии',
                'page' => 'comments',
                'comments' => $comments
            ]);
    }
}
