<?php
/**
 * @var \App\Models\Post[]
 */
require_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'layout' . DIRECTORY_SEPARATOR . 'header.php');
?>

<?php foreach ($post as $post1): ?>
    <div class="card">
        <img class="card-img-top" src="<?= '/' . $post1['img_path'] ?>" alt="<?= $post1['img'] ?>">
        <div class="card-body">
            <h4 class="card-title">название поста - <?= $post1['head'] ?></h4>
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <p class="card-text">
                            краткое содержание поста - <?= $post1['topic'] ?>
                        </p>
                    </div>
                    <div class="col-sm text-align: right">
                        <p class="card-text">
                            <?= $post1['data_create'] ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>

<?php
require_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'layout' . DIRECTORY_SEPARATOR . 'footer.php');