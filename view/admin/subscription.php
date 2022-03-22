<?php
require_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'layout' . DIRECTORY_SEPARATOR . 'header.php');
?>
    <form action="/admin/subscription/<?= $subsription->id ?>" method="POST">
        <div class="card">
            <div class="card-body">
                <div class="card-body">
                    изменить email подписки <input type="text" name="email" value="<?= $subsription->email ?>">
                </div>
                <br>
                <input type="submit" name="changeSubscriptionEmail" value="изменить">
                <br><br>
                <input type="submit" name="deleteSubscription" value="удалить">
            </div>
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
