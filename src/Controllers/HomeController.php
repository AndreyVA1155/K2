<?php

namespace App\Controllers;

use App\View\View;
use App\Controllers\Post;
use PDO;
use PDOException;

/**
 * @param string connect функиция создает подключения в БД SQl, connect()
 */
function connect()
{
    static $connect;

    if (empty($connect)) {
        try {
            $connect = new PDO('mysql:host=' . HOST . '; dbname=' . DBNAME,
                USER, PASSWORD);
            if (!$connect->errorInfo()) {
                echo "\nPDO::errorInfo():\n";
                print_r($connect->errorInfo());
                die();
            }
        } catch (PDOException $exception) {
            echo 'нет доступа к базе данных ' . $exception->getMessage();
            exit;
        }

    }
    return $connect;
}

$posts = connect()->prepare(
    "SELECT * FROM posts");
$posts->execute();
$postsAll = $posts->fetchAll();

class HomeController
{
    public
        $head,
        $topic,
        $text;

    public function getHead() {
        return $this->head;
    }

    public function getTopic() {
        return $this->topic;
    }

    public function getText() {
        return $this->text;
    }

    public function homepage()
    {
        return new View('homepage.homepage',
            [
                'title' => 'Главная страница',
                'head' => $this->getHead(),
                'topic' => $this->getTopic(),
                'text' => $this->getText()
            ]);
    }
}

foreach ($postsAll as $item) {
$item = new HomeController();
}