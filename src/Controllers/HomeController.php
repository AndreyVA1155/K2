<?php

namespace App\Controllers;

use App\Models\Post;
use App\View\View;

//основной контроллер главной страницы
class HomeController
{
    public function homepage()
    {
        $limit = 10; //максимальное количество постов на странице
        $posts = Post::where(null)
            ->orderByDesc('data_create')
            ->get();
        $pages = 'posts';
        if (intdiv(count($posts), $limit) == 0) {
            $pages = intdiv(count($posts), $limit);
        } else {
            $pages = intdiv(count($posts), $limit) + 1;
        }
        return new View('homepage.homepage',
            [
                'title' => 'Главная страница',
                'posts' => $posts,
                'pages' => $pages
            ]);
    }


    public function showPost($id)
    {
        $post = Post::where('id', $id)->get();
        return new View('homepage.post',
            [
                'title' => 'Пост',
                'post' => $post
            ]);
    }

}
