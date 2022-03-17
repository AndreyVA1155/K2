<?php

namespace App\Controllers;

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
            $statusSubsription = Subscription::where('email', $email)
                ->first();
        }

        $limit = ParamSite::where('id', 1)->first(); //максимальное количество постов на странице
        $posts = Post::where(null)
            ->orderByDesc('data_create')
            ->get();

        if (intdiv(count($posts), $limit['limit']) == 0) {
            $pages = intdiv(count($posts), $limit['limit']);
        } else {
            $pages = intdiv(count($posts), $limit) + 1;
        }

        if (isset($statusSubsription['email'])) {
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
            $viewSubsription = '<input type="text" name="email" value="введите email"><br>';
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
                'textSubscription' => $textSubscription
            ]);
    }

    public function showPost($id)
    {
        $idUser = $_SESSION['userId'] ?? '';
        $emailUser = User::where('id', $idUser)->first();
        $email = $emailUser->email;
        $idPost = $_POST['id'];
        $post = Post::where('id', $idPost)->first();
        $statusSubsription = Subscription::where('email', $email)
            ->first();
        if (isset($statusSubsription['email']) && isset($_SESSION['userId'])) {
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
            $viewSubsription = '<input type="text" name="text" value="<?= $buttonName?>"><br>';
            $textSubscription = 'подписатьля на рассылку новостей о новых постах';
        }
        return new View('homepage.post',
            [
                'title' => 'Пост',
                'post' => $post,
                'buttonSubsription' => $buttonSubsription,
                'buttonName' => $buttonName,
                'viewSubsription' => $viewSubsription,
                'textSubscription' => $textSubscription
            ]);
    }

}
