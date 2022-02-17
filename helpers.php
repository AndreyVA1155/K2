<?php

function dd(...$params)
{
    echo '<pre>';
    var_dump($params);
    echo '</pre>';
    die;
}

function dump(...$params)
{
    echo '<pre>';
    var_dump($params);
    echo '</pre>';
}

function array_get(array $array, string $key, $default = null)
{
    $keyX = explode('.', $key);
    $keyOk = $keyX[array_key_last($keyX)];
    foreach (new RecursiveIteratorIterator(new RecursiveArrayIterator($array),
        RecursiveIteratorIterator::LEAVES_ONLY) as $key1 => $arr) {
        if ($keyOk === $key1) {
            $result = $arr;
            break;
        } else {
            $result = 'default';
        }
    }
    return $result;
}