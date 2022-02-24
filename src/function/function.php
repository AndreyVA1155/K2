<?php

/**
 * @param string принимает параметр $email введеный пользователем
 * @param string функиция getUser создает запрос в БД на вывод информации о пользователе
 * @return array с данными пользователя из БД
 */
function getUser($email)
{
    $sth = connect()->prepare("
    SELECT * FROM users
    WHERE users.email = :email");
    $sth->execute([':email' => $email]);

    return $sth->fetch();
}