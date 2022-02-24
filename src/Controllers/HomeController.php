<?php

namespace App\Controllers;

use App\View\View;
use Illuminate\Database\Capsule\Manager as Capsule;

class HomeController
{
    const LIMIT = 10;
    public function index()
    {
        $offset = intval($_REQUEST['offset'] ?? 0);
        $blogs = Capsule::table('blog')->limit(self::LIMIT)->offset($offset)->get();
        $count = Capsule::table('blog')->count();
        //код для определения количества страниц ждя пагинации
        if (($count % self::LIMIT) == 0) {
            $pages = intdiv($count, self::LIMIT);
        } else {
            $pages = intdiv($count, self::LIMIT) + 1;
        }

//        return new View('blogs', [
//            'title' => 'Главная страница',
//           'blogs' => $blogs,
//            'pages' => $pages
//        ]);
    }
}
