<?php
require_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'layout' . DIRECTORY_SEPARATOR . 'header.php');
?>

    homepage

<?php foreach ($posts as $post): ?>
    <div class="card">
        <img  class="card-img-top" src="<?= $post['img_path'] ?>" alt="<?= $post['img'] ?>">
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


<?php
require_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'layout' . DIRECTORY_SEPARATOR . 'footer.php');