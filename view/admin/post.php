<?php
require_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'layout' . DIRECTORY_SEPARATOR . 'header.php');
?>

    <div class="card">
        <?php if (isset($post['img_path'])) { ?>
        <img class="card-img-top" src="<?= '/' . $post['img_path'] ?>" alt="<?= $post['img'] ?>">
        <?php } ?>
        <div>
            <br>
            название поста
            <br>
            <input type="text" name="status" value="<?= $post['head'] ?>"
        </div>
        <div>
            <br>
            краткое содержание поста
            <br>
            <input type="text" name="status" value="<?= $post['topic'] ?>"
        </div>
        <div>
            <br>
            содержание поста
            <br>
            <input type="text" name="status" value="<?= $post['text'] ?>"
        </div>
    </div>
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