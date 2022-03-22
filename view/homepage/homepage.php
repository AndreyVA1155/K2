<?php
$error = '';
require_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'layout' . DIRECTORY_SEPARATOR . 'header.php');
?>

<?php foreach ($posts as $post): ?>
    <div class="card">
        <img  class="card-img-top" src="\<?= $post['img_path'] ?>" alt="<?= $post['img'] ?>">
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
            <a href="/post/<?= $post['id'] ?>" class="btn btn-primary">читать пост</a>
        </div>
    </div>
<?php endforeach ?>
    <nav aria-label="Page navigation example">
    <ul class="pagination">
<?php foreach ($arrayPages as $arrayPage): ?>
    <li idPage="<?= $arrayPage ?>" class="page-item"><a class="page-link" href="/"><?= $arrayPage ?></a></li>
<?php endforeach ?>
    </ul>
    </nav>
<hr>
    <br>
<form action="/changeStatusSubscribe" method="post">
    <div>
        подписка на рассылку новостей о новых постах
        <br>
        <?= $viewSubsription ?>
        <br>
        <input type="hidden" name="status" value="<?= $buttonName ?>">
        <input type="submit" name="subsripton" class="<?= $buttonSubsription ?>" value="<?= $buttonName ?>">
    </div>
</form>
<?= $_POST['message'] ?? "" ?>

<?php
require_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'layout' . DIRECTORY_SEPARATOR . 'footer.php');
