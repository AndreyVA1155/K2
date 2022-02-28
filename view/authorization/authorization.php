<?php

//$email = $_POST['email'] ?? '';
//$password = $_POST['password'] ?? '';

//if (isset($_POST['send'])) {
///    $user = getUser($email);
//    if ($user && $user['email'] == $email && password_verify($password, $user['password'])) {
//        $_SESSION['user'] = $user;
//        echo 'VSE OK' . '<br>';
//    } else {
//        echo 'логин или пароль введены неверно';
//    }
//} else {
//    echo 'кнопка авторизация не нажата';
//}

require_once ($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR .'layout' . DIRECTORY_SEPARATOR . 'header.php');
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
require_once ($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'layout' . DIRECTORY_SEPARATOR . 'footer.php');
