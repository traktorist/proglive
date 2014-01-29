<?
/*
Шаблон главной страницы
=======================
$subject - заголовок
$content - содержание
*/
?>


<div class="top">
    <a href="../../controller/c_index.php">Главная</a> |
    <a href="../../controller/c_editor.php">Консоль редактора</a>
    <hr/>
</div>
<div class="center">
    <h1>Редактирование статьи</h1>
    <? if($empty_field): ?>
        <b style="color: red;">Заполните все поля!</b>
    <? endif ?>
    <form method="post" action="../../controller/c_edit.php">
        Название:
        <input type="hidden" name="id_article" value="<?=$id_article?>" /><br/>
        <input type="text" name="subject" value="<?=$subject?>" /><br/>
        <br/>
        Содержание:<br/>
        <textarea name="content"><?=$content?></textarea><br/>
        <input type="submit" name="save" value="Сохранить" />
        <input type="submit" name="cancel" value="Отмена" />
        <input type="submit" name="delete" value="Удалить" />
    </form>
</div>
