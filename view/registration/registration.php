<?php
require_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'layout' . DIRECTORY_SEPARATOR . 'header.php');
if (!isset($error)) {
    $error = '';
}
?>

    <form id="registration" action="/registration" name="registration" method="post">
        <p>
            <span>*</span> поля обязательные для заполнения
        </p>
        <div class="form-group">
            <label for="name">введите имя</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="* имя">
        </div>
        <div class="form-group">
            <label for="email">введите email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="* email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">введите пароль</label>
            <input type="password" name="password1" class="form-control" id="exampleInputPassword1"
                   placeholder="* пароль">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">введите пароль снова</label>
            <input type="password" name="password2" class="form-control" id="exampleInputPassword2"
                   placeholder="* пароль">
        </div>
        <input type="checkbox" name="check" id="check" value="">
        <label for="check">согласен с правилами сайта *</label>
        <br>
        <button id="registration" name="registration" type="submit" class="btn btn-primary">регистрация</button>
    </form>
    <div><?= $error ?></div>

<?php
require_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'layout' . DIRECTORY_SEPARATOR . 'footer.php');
