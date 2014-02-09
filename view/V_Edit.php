<?
/*
Шаблон главной страницы
=======================
$subject - заголовок
$content - содержание
*/
?>


<div class="center">
    <h1>Редактирование статьи</h1>
    <? if($empty_field): ?>
        <b style="color: red;">Заполните все поля!</b>
    <? endif; ?>
    <form method="post">
        Название:
        <input type="hidden" name="id_article" value="<?=$id_article;?>" /><br />
        <input type="text" name="subject" value="<?=$subject;?>" /><br />
        <br />
        Содержание:<br />
        <textarea name="content"><?=$content;?></textarea><br />
        <input type="submit" name="save" value="Сохранить" />
        <input type="submit" name="cancel" value="Отмена" />
        <input type="submit" name="delete" value="Удалить" />
    </form>
</div>
