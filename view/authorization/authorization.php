<?php
require_once ($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR .'layout' . DIRECTORY_SEPARATOR . 'header.php');

echo '<pre>';
var_dump($user);
echo '</pre>';
echo '<br>';
?>
авторизация

    <br>
    <form id="authorization" action="/authorization" name="authorization" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Пароль</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="пароль">
        </div>
        <br>
        <button id="registration" name="send" type="submit" class="btn btn-primary">авторизация</button>
    </form>
    <br>
    <a class="link-primary" href="/registration">Регистрация</a>

<?php
var_dump(isset($_POST['send']));
require_once ($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'layout' . DIRECTORY_SEPARATOR . 'footer.php');
