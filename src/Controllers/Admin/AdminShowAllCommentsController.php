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
        $сomments = Comment::all();

        return new View('admin.admin',
            [
                'title' => 'Все комментрарии',
                'page' => 'comments',
                'сomments' => $сomments
            ]);
    }
}
