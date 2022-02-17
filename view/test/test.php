<?php
require_once ($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR .'layout' . DIRECTORY_SEPARATOR . 'header.php');
?>

post
<br><br>
<a href="/about">О нас</a>
<br>
<a href="/testing"> testing</a>
<br>
<br>
<a href="/posts"> posts</a>
<br>

<?php
echo $text = $text ?? null;
?>

<?php
require_once ($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'layout' . DIRECTORY_SEPARATOR . 'footer.php');
?>