<?php
require_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'layout' . DIRECTORY_SEPARATOR . 'header.php');
?>
<?php if ($page == 'main') { ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbar-example">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/allUsers">Все пользователи</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/allPosts">Все посты</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/allComments">Все комментарии</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/allSubscription">Все подписки</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/allStaticPage">Управление статичными страницами</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/changeParamSite">Изменение параметров сайта</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<?php } elseif ($page == 'users') { ?>
    <?php foreach ($users as $user): ?>
        <div class="card">
            <div class="card-body">
                <div class="card-body">
                    имя пользователя - <?= $user['name'] ?>
                </div>
                <div class="card-body">
                    фамилия пользователя - <?= $user['surname'] ?>
                </div>
                <div class="card-body">
                    email пользователя - <?= $user['email'] ?>
                </div>
                <div class="card-body">
                    описание пользователя - <?= $user['description'] ?>
                </div>
                <div class="card-body">
                    статус пользователя - <?= $user['status_user'] ?>
                </div>
            </div>
        </div>
    <?php endforeach ?>
<?php } elseif ($page == 'subscription') { ?>
    subscription
<?php } elseif ($page == 'comments') { ?>
    <?php foreach ($Comments as $Comment): ?>
        <div class="card">
            <div class="card-body">
                <div class="card-body">
                    текст комментария - <?= $Comment['text'] ?>
                </div>
                <div class="card-body">
                    статус комментария - <?= $Comment['status'] ?>
                </div>
                <div class="card-body">
                    имя пользователя - <?= $Comment['user_id'] ?>
                </div>
                <div class="card-body">
                    название поста - <?= $Comment['post_id'] ?>
                </div>
            </div>
        </div>
    <?php endforeach ?>
<?php } elseif ($page == 'posts') { ?>
    <?php foreach ($posts as $post): ?>
        <div class="card">
            <img class="card-img-top" src="<?= $post['img_path'] ?>" alt="<?= $post['img'] ?>">
            <div class="card-body">
                <h4 class="card-title">название поста - <?= $post['head'] ?></h4>
                <div class="container">
                    <div class="row">
                        <div class="col-sm">
                            <p class="card-text">
                                краткое содержание поста - <?= $post['topic'] ?>
                            </p>
                        </div>
                        <div class="col-sm text-align: right">
                            <p class="card-text">
                                <?= $post['data_create'] ?>
                            </p>
                        </div>
                    </div>
                </div>
                <a href="???" class="btn btn-primary">читать пост</a>
            </div>
        </div>
    <?php endforeach ?>
<?php } elseif ($page == 'staticPage') { ?>
    staticPage
<?php } elseif ($page == 'changeParamSite') { ?>
    changeParamSite
<?php } ?>
<?php
require_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'layout' . DIRECTORY_SEPARATOR . 'footer.php');