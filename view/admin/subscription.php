<?php
/**
 * @var \App\Models\Post[]
 */
require_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'layout' . DIRECTORY_SEPARATOR . 'header.php');
$Comment['email'] = 'email';
$Comment['id'] = 'id';
?>
    <form action="/admin/changeCommеnt/<?= $Comment['id'] ?>" method="POST">
        <div class="card">
            <div class="card-body">
                <div class="card-body">
                    изменить email подписки <input type="text" name="email" value="<?= $Comment['email'] ?>"
                </div>
<!--                --><?php //if() { ?>
<!---->
<!--                --><?php //} ?>
                <br>
                <input type="submit" name="changeSubscription" value="изменить">
            </div>
        </div>
    </form>


<?php
require_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'layout' . DIRECTORY_SEPARATOR . 'footer.php');