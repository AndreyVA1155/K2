<?php
/**
 * @var $post \App\Models\Post
 */
require_once ($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR .'layout' . DIRECTORY_SEPARATOR . 'header.php');
?>

post
<br><br>
<a href="/about">О нас</a>
<br>
<a href="/testing"> testing</a>
<br>

<?php
echo 'название поста: ' . $post['name'] . 'описание поста: ' . $post['description'] .  'автор поста: ' . $post['author'] . PHP_EOL ?>
<?php

require_once ($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'layout' . DIRECTORY_SEPARATOR . 'footer.php');
?>