<?php
/**
 * Created by PhpStorm.
 * User: traktor
 * Date: 27.01.14
 * Time: 23:41
 */

/*
 * шаблон правой части страницы
 * входит с состав центральной части страницы
 * */

?>


<span><u>Комментарии: </u></span><br /><br />
<? foreach ($comments as $comment): ?>
    <?=$comment['text'];?><br />
    <?=$comment['create_date'];?><br />
    <hr />
<? endforeach; ?>

<form method="post" action="index.php?c=comment&act=new">
    <input type="hidden" name="id_article" value="<?=$id_article;?>" /><br />
    Новый комментарий:<br />
    <textarea name="text" class="comment" placeholder="Аффтар, пеши исчо!!!1"></textarea><br />
    <input type="submit" name="send" value="Отправить" />
</form>
