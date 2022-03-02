<?php
require_once ($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR .'layout' . DIRECTORY_SEPARATOR . 'header.php');
?>
<?php if($page == 'main') { ?>
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
    <?php } elseif($page == 'users') { ?>
    users
    <?php } elseif($page == 'subscription') {?>
    subscription
    <?php } elseif ($page == 'comments') {?>
    comments
    <?php } elseif ($page == 'posts') { ?>
    posts
    <?php } elseif ($page == 'staticPage') {?>
    staticPage
    <?php } elseif ($page == 'changeParamSite') {?>
    changeParamSite
    <?php } ?>
<?php
require_once ($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'layout' . DIRECTORY_SEPARATOR . 'footer.php');