<?php

namespace App\Controllers\Admin;

use App\View\View;
use App\Models\Post;

//контроллер для вывода всех постов
class AdminShowAllPostController
{
    public function getAllPost()
    {
        $limit = 10; //максимальное количество постов на странице
        $posts = Post::all();

        if (intdiv(count($posts), $limit) == 0) {
            $pages = intdiv(count($posts), $limit);
        } else {
            $pages = intdiv(count($posts), $limit) + 1;
        }
        $page = 'posts';
        return new View('admin.admin',
            [
                'title' => 'Все посты',
                'posts' => $posts,
                'pages' => $pages,
                'page' => $page
            ]);

    }

    public function readPost($id)
    {
        $post = Post::where('id', $id)->get();
        $page = 'post';
        return new View('admin.post',
            [
                'title' => 'Пост',
                'post' => $post,
                'page' => $page
            ]);
    }
}
