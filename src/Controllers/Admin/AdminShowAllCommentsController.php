<?php

namespace App\Controllers\Admin;

use App\Models\Comment;
use App\View\View;

//контроллер для показа всех коментариев
class AdminShowAllCommentsController
{
    public function showAllComments()
    {
        $comments = Comment::all();
        foreach ($comments as $comment) {
            $comment['name'] = $comment->user->name;
            $comment['surname'] = $comment->user->surname;
            $comment['head'] = $comment->post->head;
        }

        $page = 'comments';
        return new View('admin.admin',
            [
                'title' => 'Все комментрарии',
                'page' => $page,
                'Comments' => $comments
            ]);
    }
}
