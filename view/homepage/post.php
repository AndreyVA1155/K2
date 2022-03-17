<?php
require_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'layout' . DIRECTORY_SEPARATOR . 'header.php');
?>

    <div class="card">
        <img class="card-img-top" src="\<?= $post['img_path'] ?>" alt="<?= $post['img'] ?>">
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
        </div>
    </div>
    <br>
    <form action="/changeStatusSubscribe" method="post">
        <?= $viewSubsription ?>
        <div><?= $textSubscription ?></div>
        <input type="hidden" name="status" value="<?= $buttonName ?>">
        <button type="submit" name="subsripton" class="<?= $buttonSubsription ?>"><?= $buttonName ?></button>
    </form>

<?php
require_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'layout' . DIRECTORY_SEPARATOR . 'footer.php');
