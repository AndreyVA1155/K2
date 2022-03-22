<?php

namespace App\Controllers\Admin;

use App\View\View;
use App\Models\Post;

/**
 * Class AdminShowAllPostController
 * @package App\Controllers\Admin
 */
class AdminShowAllPostController
{
    public function getAllPost()
    {
        $limit = 10; //максимальное количество постов на странице
        $posts = Post::all();

        if (intdiv(count($posts), $limit) == 0) {
            $countPages = intdiv(count($posts), $limit);
        } else {
            $countPages = intdiv(count($posts), $limit) + 1;
        }

        return new View('admin.admin',
            [
                'title' => 'Все посты',
                'posts' => $posts,
                'pages' => 'posts',
                'page' => 'posts'
            ]);

    }

    public function readPost()
    {
        $id = $_POST['id'];
        $post = Post::where('id', $id)->first();
        return new View('admin.post',
            [
                'title' => 'Пост',
                'post' => $post,
                'page' => 'post'
            ]);
    }
}
