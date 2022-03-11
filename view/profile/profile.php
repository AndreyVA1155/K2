<?php
require_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'layout' . DIRECTORY_SEPARATOR . 'header.php');
?>

    <h2> личный кабинет </h2>

<?php if($profile == 'edit') { ?>
        <div class="card">
            фото пользователя
            <img class="card-img-top" src="" alt="аватар">
            <form name="upload" action="/profile/editProfile" method="POST" ENCTYPE="multipart/form-data">
                Выберите фото для загрузки:
                <input type="file" name="userfile">
                <div class="card-body">
                    <p class="card-text">
                        <input type="text" name="name" value="<?= $user['name'] ?>"
                    </p>
                    <p class="card-text">
                        <input type="text" name="surname" value="<?= $user['surname'] ?>"
                    </p>
                    <p class="card-text">
                        <input type="text" name="email" value="<?= $user['email'] ?>"
                    </p>
                    <p class="card-text">
                        <input type="text" name="description" value="<?= $user['description'] ?>"
                    </p>
                </div>
                <input type="submit" name="upload" value="Обновить информацию">
            </form>
        </div>
<?php } elseif($profile == 'show') { ?>
        <div class="card">
            фото пользователя
            <img class="card-img-top" src="" alt="аватар">
            <form name="upload" action="/profile/editProfile" method="POST" ENCTYPE="multipart/form-data">
                Выберите фото для загрузки:
                <input type="file" name="userfile">
                <div class="card-body">
                    <p class="card-text">
                        <?= $user['name'] ?> - имя
                    </p>
                    <p class="card-text">
                        <?= $user['surname'] ?> - фамилия
                    </p>
                    <p class="card-text">
                        <?= $user['email'] ?> - email
                    </p>
                    <p class="card-text">
                        <?= $user['description'] ?> - о себе
                    </p>
                    <p class="card-text">
                        <?= $user['status'] ?> - статус пользователя
                    </p>    
                </div>
                <input type="submit" name="upload" value="Обновить информацию">
            </form>
        </div>
<?php } ?>
<?php
require_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'layout' . DIRECTORY_SEPARATOR . 'footer.php');
