<?php

namespace App\Controllers;

use App\Models\Comment;
use App\View\View;

/**
 * Class AddCommentController
 * @package App\Controllers
 */
class AddCommentController
{

    public function addComment()
    {
        if (isset($_POST['addComment'])) {
            $newCooment = new Comment();
            $newCooment->text = $_POST['comment'];
            $userId = $_SESSION['userId'];
            $newCooment->user_id = $userId;
            $idPost = $_SESSION['idPost'];
            $newCooment->post_id = $idPost;
            $newCooment->save();
//            $message = 'комментарий добавлен';

        }
        return new View('comment.addComment',
            [
                'title' => 'Главная страница',
                //'message' => $message
            ]);
    }
}
