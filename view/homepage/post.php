<?php
$error = '';
require_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'layout' . DIRECTORY_SEPARATOR . 'header.php');
?>


    <div class="card">
        <img  class="card-img-top" src="\<?= $post['img_path'] ?>" alt="<?= $post['img'] ?>">
        <div class="card-body">
            <h4 class="card-title">название поста - <?= $post['head'] ?></h4>
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <p class="card-text">
                            полное содержание поста - <?= $post['text'] ?>
                        </p>
                    </div>
                    <div class="col-sm text-align: right">
                        <p class="card-text">
                            <?= $post['data_create'] ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<br>
<?php foreach ($comments as $comment): ?>
<div>
    текст комментария
    <br>
    <p>
    <textarea rows="5" cols="35" name="text"><?= $comment->text?> </textarea>
    </p>
    <br>
    кто оставил комментарий
    <br>
    <p>
        <strong><?= $comment->user->name . ' ' . $comment->user->surname  ?></strong>
    </p>
    <br>
    когда создан коментарий
    <br>
    <p>
        <strong> <?= $comment->created_at ?> </strong>
    </p>
</div>
<hr>
<?php endforeach ?>
    <form action="/changeStatusSubscribe" method="POST">
        <div>
            подписка на рассылку новостей о новых постах
            <br>
            <?= $viewSubsription ?>
            <br>
            <input type="submit" name="subsripton" class="<?= $buttonSubsription ?>" value="<?= $buttonName ?>">
        </div>
    </form>
    <hr>
<?php
if (isset($_SESSION['userId'])) {
    If (isset($_SESSION['status_user'])) {
        if($_SESSION['status_user'] != 'незарегистированный пользователь') {    ?>
            <form action="/addComment" method="POST">
            <div>
            написать комментарий
            <br>
                <input type="text" name="comment" id="comment" value="">
                <br><br>
                <input type="submit" name="addComment"  value="добавить комментарий">
            </div>
        </form>
    <?php }
    }
}
?>
<?= $message ?? ""  ?>
<?= $_POST['message'] ?? ""  ?>
<?php
require_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'layout' . DIRECTORY_SEPARATOR . 'footer.php');
