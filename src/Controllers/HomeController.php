<?php

namespace App\Controllers;

use App\Models\Post;
use App\View\View;
use Illuminate\Database\Capsule\Manager as Capsule;

//основной контроллер главной страницы
class HomeController
{
    public function homepage()
    {
        $limit = 10; //максимальное количество постов на странице
        $posts = Post::where(null)
            ->orderByDesc('data_create')
            ->get();
        $pages = 1; //количество странx иц для пагинации
        if (!intdiv(count($posts), $limit)) {
            $pages = $pages + 1;
        }
        return new View('homepage.homepage',
            [
                'title' => 'Главная страница',
                'posts' => $posts,
                'pages' => $pages
            ]);
    }
}
