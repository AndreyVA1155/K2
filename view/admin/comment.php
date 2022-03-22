<?php
require_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'layout' . DIRECTORY_SEPARATOR . 'header.php');
?>
    <form action="/admin/commеnt/<?= $comment['id'] ?>" method="POST">
        <div class="card">
            <div>
                текст комментария
                <br>
                <input type="text" name="text" value="<?= $comment['text'] ?>"

            </div>
            <div>
                <br>
                статус комментария
                <br>
                <input type="text" name="status" value="<?= $comment['status'] ?>"
            </div>
            <div>
                <br>
                кто оставил комментарий
                <br>
                <input type="text" name="name" value="<?= $comment->name ?>"
            </div>
            <div>
                <br>
                название поста
                <br>
                <input type="text" name="headPost" value="<?= $comment['head'] ?>"
            </div>
            <br><br><br>
            <input type="submit" name="changeComment" value="изменить коментарий">
            <br><br>
            <input type="submit" name="deleteComment" value="удалить комментарий">
        </div>
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
<?php
require_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'layout' . DIRECTORY_SEPARATOR . 'footer.php');