<?php
/**
 * @var \App\Models\Post[]
 */
require_once ($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR .'layout' . DIRECTORY_SEPARATOR . 'header.php');
?>

    post
    <br><br>
    <a href="/about">О нас</a>
    <br>
    <a href="/testing"> testing</a>
    <br>

<?php foreach ($posts as $post): ?>
    назвние поста: <?=$post['name']?> описание поста: <?=$post['description']?>  автор поста: <?=$post['author']?>
<a href="/posts/<?=$post['id']?>">Читать далее</a><br>
<?php endforeach ?>


<?php
require_once ($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'layout' . DIRECTORY_SEPARATOR . 'footer.php');
?><?php
