<?php

namespace App\Controllers\Admin;

use App\View\View;
use App\Models\Post;

/**
 * Class AdminChangePostController
 * @package App\Controllers\Admin
 */
class AdminChangePostController
{
    public function changePost()
    {

        if (isset($_POST['namePost'])) {
            $id = $_POST['id'];
            $post = Post::where('id', $id)->first();
            $post->head = $_POST['namePost'];
            $post->topic = $_POST['topic'];
            $post->text = $_POST['text'];
            $post->data_create = $_POST['dataCreate'];
            $post->save();
        }

        return new View('admin.post',
            [
                'title' => 'Изменение поста',
                'post' => $post,
                'page' => 'posts',
                'post' => $post
            ]);
    }
}
