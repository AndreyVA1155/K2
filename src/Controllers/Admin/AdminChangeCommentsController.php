<?php

namespace App\Controllers\Admin;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use App\View\View;

/**
 * Class AdminChangeCommentsController
 * @package App\Controllers\Admin
 */
class AdminChangeCommentsController
{
    public function сhangeComment()
    {
        $id = $_POST['id'];
        $comment = Comment::where('id', $id)->first();
        $statusComment = ['на модерации', 'опубликован'];
        $users = User::all();
        $posts = Post::all();
        var_dump($comment->users)->name;

        if (isset($_POST['changeComment'])) {
            $id = $_POST['id'];
            $comment = Comment::where('id', $id)->first();
            $comment->text = $_POST['text'];
            $comment->status = $_POST['statusComment'];
            $user = explode(' ', $_POST['name']);
            $comment->user->name = $user[0];
            $comment->user->surname = $user[1];
            $comment->post->head = $_POST['headPost'];
            $comment->save();
        }

        if (isset($_POST['deleteComment'])) {
            $comment->delete();
            header('Location: /admin/allComments');
        }

        return new View(
            'admin.comment',
            [
                'title' => 'Изменение комментария',
                'comment' => $comment,
                'statusComment' => $statusComment,
                'users' => $users,
                'posts' => $posts
            ]);
    }
}
