<?php
/**
 * @var \App\Models\Post[]
 */
require_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'layout' . DIRECTORY_SEPARATOR . 'header.php');
?>
    comment
<?php foreach ($Comment as $Comment1): ?>
    <form action="/admin/changeCommеnt/<?= $Comment1['id'] ?>" method="POST">
        <div class="card">
            <div class="card-body">
                <div class="card-body">
                    текст комментария - <?= $Comment1['text'] ?>
                </div>
                <div class="card-body">
                    статус комментария - <?= $Comment1['status'] ?>
                </div>
                <div class="card-body">
                    имя пользователя - <?= $Comment1['name'] . ' ' .  $Comment1['surname']?>
                </div>
                <div class="card-body">
                    название поста - <?= $Comment1['head'] ?>
                </div>
            </div>
        </div>
    </form>
<?php endforeach ?>

<?php
require_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'layout' . DIRECTORY_SEPARATOR . 'footer.php');