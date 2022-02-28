<?php
require_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'layout' . DIRECTORY_SEPARATOR . 'header.php');
?>

    личный кабинет

<?php foreach ($users as $user): ?>
    <div class="card">
        фото пользователя
        <img class="card-img-top" src="" alt="аватар">
        <form name="upload" action="/src/Controllers/EditProfileController.php" method="POST" ENCTYPE="multipart/form-data">
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
            </div>
            <input type="submit" name="upload" value="Обновить информацию">
        </form>
    </div>
<?php endforeach ?>

<?php
require_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'layout' . DIRECTORY_SEPARATOR . 'footer.php');
