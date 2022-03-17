<?php
require_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'layout' . DIRECTORY_SEPARATOR . 'header.php');
?>

    <form name="changePost" action="/admin/post/<?= $post['id'] ?>" method="post">
        <div class="card">
            <img class="card-img-top" src="<?= '/' . $post['img_path'] ?>" alt="<?= $post['img'] ?>">
            <div class="card-body">
                название поста
                <br>
                <input type="text" name="namePost" value="<?= $post['head'] ?>">
                <br><br>
                краткое содержание поста
                <br>
                <input type="text" name="topic" value="<?= $post['topic'] ?>">
                <br><br>
                полное содержание поста
                <br>
                <input type="text" name="text" value="<?= $post['text'] ?>">
                <br><br>
                дата создания поста в формате "ГГГГ-ММ-ДД"
                <br>
                <input type="text" name="dataCreate" value="<?= $post['data_create'] ?>">
                <br><br>
                <input type="submit" name="changePost" value="изменить пост">
            </div>
        </div>
    </form>

<?php
require_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'layout' . DIRECTORY_SEPARATOR . 'footer.php');
