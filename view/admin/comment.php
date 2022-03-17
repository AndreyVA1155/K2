<?php
require_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'layout' . DIRECTORY_SEPARATOR . 'header.php');
?>

    <form action="/admin/comment/<?= $comment['id'] ?>" method="post">
        <div class="card">
            <div>
                текст комментария
                <br>
                <input type="text" name="text" value="<?= $comment['text'] ?>"
            </div>
            <div>
                <br>
                статус комментария
                <br>
                <select name="statusComment">
                    <?php
                    foreach ($statusComment as $value) {
                        echo '<option value="' . $value . '" ' . (isset($comment['status']) && $comment['status'] == $value ? ' selected ' : '') . '>' . $value . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div>
                <br>
                кто оставил комментарий
                <br>
                <select name="name">
                    <?php
                    foreach ($users as $value) {
                        echo '<option value="' . $value['name'] . ' ' . $value['surname'] . '" ' . (isset($comment->user->name) && $comment->user->name == $value['name'] ? ' selected ' : '') . '>' . $comment->user->name . ' ' . $value['name'] . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div>
                <br>
                название поста
                <br>
                <select name="headPost">
                    <?php
                    foreach ($posts as $value) {
                        echo '<option value="' . $value['head'] . '" ' . (isset($comment->post->head) && $comment->post->head == $value['head'] ? ' selected ' : '') . '>' . $value['head'] . '</option>';
                    }
                    ?>
                </select>
            </div>
            <br><br><br>
            <input type="submit" name="changeComment" value="применить изменение комментария">
        </div>
    </form>

<?php
require_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'layout' . DIRECTORY_SEPARATOR . 'footer.php');
