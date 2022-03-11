<?php

namespace App\Controllers\Admin;

use App\Models\Comment;
use App\View\View;

//контроллер для изменений комментария
class AdminChangeCommentsController
{
    public function ChangeComment($id)
    {
        $comment = Comment::find($id);
        foreach ($comment as $comment1) {
            $comment1['name'] = $comment1->user->name;
            $comment1['surname'] = $comment1->user->surname;
            $comment1['head'] = $comment1->post->head;
        }
        return new View(
            'admin.comment',
            [
                'title' => 'Изменение комментария',
                'Comment' => $comment
            ]);
    }
}
