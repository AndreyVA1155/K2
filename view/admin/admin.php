<?php
/**
 * @var \App\Models\Post[]
 */
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
        <form action="/admin/user/<?= $user['id'] ?>" method="POST">
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
                        статус пользователя - <?= $user['status'] ?>
                    </div>
                    <input type="submit" name="changeUser" value="изменить пользователя">
                    <input type="submit" name="deleteUser" value="удалить пользователя">
                </div>
            </div>
        </form>
    <?php endforeach ?>
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

<?php } elseif ($page == 'subscription') { ?>
    <?php foreach ($subscriptions as $subscription): ?>
        <form action="/admin/subscription/<?= $subscription['id'] ?>" method="POST">
            <div class="card">
                <div class="card-body">
                    <?php if (isset($subscription['name'])) { ?>
                        <div class="card-body">
                            имя и фамилия подписавшегося пользователя -
                            <strong><?= $subscription['name'] . ' ' . $subscription['surname'] ?></strong>
                        </div>
                    <?php } ?>
                    <div class="card-body">
                        email подписки - <strong><?= $subscription['email'] ?></strong>
                    </div>
                    <input type="submit" name="changeSubscription1" value="изменить подписку">
                    <input type="submit" name="deleteSubscription" value="удалить подписку">
                </div>
            </div>
        </form>
    <?php endforeach ?>
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
<?php } elseif ($page == 'comments') {
    $commentName = '';
    $сommentPostHead = '';
    ?>
    <?php foreach ($сomments as $сomment): ?>
        <form action="/admin/comment/<?= $сomment['id'] ?>" method="POST">
            <div class="card">
                <div class="card-body">
                    <div class="card-body">
                        текст комментария - <?= $сomment['text'] ?>
                    </div>
                    <div class="card-body">
                        статус комментария - <?= $сomment['status'] ?>
                    </div>
                    <div class="card-body">
                        имя пользователя - <?php if (isset($сomment->user->name)) {
                            echo $сomment->user->name . ' ' . $сomment->user->surname;
                        }?>
                    </div>
                    <div class="card-body">
                        название поста, где написан комментарий - <?= $сommentPostHead ? $сomment->post->head :  ''?>
                    </div>
                    <input type="submit" name="changeComment1" value="изменить комментарий">
                    <input type="submit" name="deleteComment" value="удалить комментарий">
                </div>
            </div>
        </form>
    <?php endforeach ?>
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
<?php } elseif ($page == 'posts') { ?>
    <?php foreach ($posts as $post): ?>
        <div class="card">
            <form action="/admin/post/<?= $post['id'] ?>" method="post">
            <img class="card-img-top" src="<?= '/' . $post['img_path'] ?>" alt="<?= $post['img'] ?>">
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
                <input type="submit" name="changePost1" value="изменить пост">
                <input type="submit" name="deletePost" value="удалить пост">
            </div>
            </form>
        </div>

    <?php endforeach ?>
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
<?php } elseif ($page == 'staticPage') { ?>
    staticPage
<?php } elseif ($page == 'changeParamSite') { ?>
        <form action="/admin/changeParamSite" method="POST">
            <div class="card">
                <p class="card-text">
                    предельное количество старниц - <input type="text" name="limit" value="<?= $limit['limit'] ?>"
                </p>
            </div>
            <br>
            <input type="submit" name="button" value="Обновить информацию">
        </form>
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
<?php } ?>

<?php
require_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'layout' . DIRECTORY_SEPARATOR . 'footer.php');
