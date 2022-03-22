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
        $id = $_POST['id'];
        $post = Post::where('id', $id)->first();
        if (isset($_POST['changePost1'])) {

            $post->head = $_POST['namePost'];
            $post->topic = $_POST['topic'];
            $post->text = $_POST['text'];
            $post->data_create = $_POST['dataCreate'];
            $post->save();
        }
        if (isset($_POST['deletePost'])) {
            $post->delete();
            header('Location: /admin/allPosts');
        }

var_dump($_POST);
        return new View('admin.post',
            [
                'title' => 'Изменение поста',
                'post' => $post,
                'page' => 'posts',
                'post' => $post
            ]);
    }
}
