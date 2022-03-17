<?php
require_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'layout' . DIRECTORY_SEPARATOR . 'header.php');
?>

    <form action="/admin/subscription/<?= $subsription->id ?>" method="POST">
        <div class="card">
            <div class="card-body">
                <div class="card-body">
                    изменить email подписки <input type="text" name="email" value="<?= $subsription->email ?>">
                </div>
                <br>
                <input type="submit" name="changeSubscriptionEmail" value="изменить">
            </div>
        </div>
    </form>

<?php
require_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'layout' . DIRECTORY_SEPARATOR . 'footer.php');
