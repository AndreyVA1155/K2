<?php

namespace App\Controllers;

use App\Models\Comment;
use App\Models\Subscription;
use App\Models\Post;
use App\Models\User;
use App\Models\ParamSite;
use App\View\View;

/**
 * Class HomeController
 * @package App\Controllers
 */
class HomeController
{
    public function homepage()
    {
        $idUser = $_SESSION['userId'] ?? '';
        if (isset($_SESSION['userId'])) {
            $emailUser = User::where('id', $idUser)->first();
            $email = $emailUser->email;
            $statusSubsription = Subscription::where('email', $email)->first();
        }

        $limit = ParamSite::where('id', 1)->first(); //максимальное количество постов на странице
        $posts = Post::where(null)
            ->orderByDesc('data_create')
            ->get();
        if (intdiv(count($posts), $limit->limit) == 0) {
            $pages = count($posts);
        } else {
            $pages = intdiv(count($posts), $limit->limit) + 1;
        }

        $arrayPages = [];
        for ($i = 1; $i <= $pages; $i++) {
            $arrayPages[] = $i;
        }

        if (isset($statusSubsription->email)) {
            $buttonSubsription = 'btn btn-outline-success';
            $buttonName = 'отписаться';
            $viewSubsription = '';
            $textSubscription = 'отписаться от рассылки новостей о новых постах';
        } elseif ((isset($_SESSION['userId'])) && !isset($statusSubsription['email'])) {
            $buttonSubsription = 'btn btn-outline-primary';
            $buttonName = 'подписаться';
            $viewSubsription = '';
            $textSubscription = 'подписатьля на рассылку новостей о новых постах';
        } else {
            $buttonSubsription = 'btn btn-outline-primary';
            $buttonName = 'подписаться';
            $viewSubsription = '<input type="email" name="email" required placeholder="введите email"><br>';
            $textSubscription = 'подписатьля на рассылку новостей о новых постах';
        }

        return new View('homepage.homepage',
            [
                'title' => 'Главная страница',
                'posts' => $posts,
                'pages' => 'posts',
                'buttonSubsription' => $buttonSubsription,
                'buttonName' => $buttonName,
                'viewSubsription' => $viewSubsription,
                'textSubscription' => $textSubscription,
                'arrayPages' => $arrayPages
            ]);
    }

    public function showPost()
    {
        $idUser = $_SESSION['userId'] ?? '';
        $idPost = $_POST['id'];
        $_SESSION['idPost'] = $idPost;
        $post = Post::where('id', $idPost)->first();
        $emailUser = User::where('id', $idUser)->first();
        if (isset($emailUser->email)) {
            $email = $emailUser->email;
            $statusSubsription = Subscription::where('email', $email)->first();
        }

        if (isset($statusSubsription['email']) && isset($_SESSION['userId'])) {
            $buttonSubsription = 'btn btn-outline-success';
            $buttonName = 'отписаться';
            $viewSubsription = '';
            $textSubscription = 'отписаться от рассылки новостей о новых постах';
        } elseif ((isset($_SESSION['userId'])) && !isset($statusSubsription->email)) {
            $buttonSubsription = 'btn btn-outline-primary';
            $buttonName = 'подписаться';
            $viewSubsription = '';
            $textSubscription = 'подписатьля на рассылку новостей о новых постах';
        } else {
            $buttonSubsription = 'btn btn-outline-primary';
            $buttonName = 'подписаться';
            $viewSubsription = '<input required="" type="email" name="text" value=""><br>';
            $textSubscription = 'подписатьля на рассылку новостей о новых постах';
        }

        $comments = Comment::where ('post_id', $idPost)->get();

        return new View('homepage.post',
            [
                'title' => 'Пост',
                'post' => $post,
                'buttonSubsription' => $buttonSubsription,
                'buttonName' => $buttonName,
                'viewSubsription' => $viewSubsription,
                'textSubscription' => $textSubscription,
                'comments' => $comments
            ]);
    }

}
