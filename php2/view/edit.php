<?
/*
Шаблон главной страницы
=======================
$subject - заголовок
$context - содержание
*/
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <title>PHP. Уровень 2</title>
    <meta content="text/html; charset=utf8" http-equiv="content-type">
    <link rel="stylesheet" type="text/css" media="screen" href="view/style.css" />
</head>
<body>
<h1>PHP. Уровень 2</h1>
<br/>
<a href="index.php">Главная</a> |
<a href="editor.php">Консоль редактора</a>
<hr/>
<h1>Редактирование статьи</h1>
<? if($empty_field): ?>
    <b style="color: red;">Заполните все поля!</b>
<? endif ?>
<form method="post" action="edit.php">
    Название:<br/>
    <input type="hidden" name="id_article" value="<?=$id_article?>" /><br/>
    <input type="text" name="subject" value="<?=$subject?>" /><br/>
    <br/>
    Содержание:<br/>
    <textarea name="context"><?=$context?></textarea><br/>
    <input type="submit" value="Сохранить" />
<!--    <input type="submit" value="Отмена" />-->
<!--    <input type="submit" value="Удалить" />-->
</form>
<hr/>
<small><a href="http://prog-school.ru">Школа Программирования</a> &copy;</small>
</body>
</html>
