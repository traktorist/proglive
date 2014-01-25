<?
/*
Шаблон просмотра конкретной страницы
=======================
$article - статья

статья:
id_article - идентификатор
title - заголовок
content - текст
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
<ul>
    <p>
        <b>Тема:</b>
        <?=$article['subject']?>
    </p>
    <p>
        <b>Тело:</b>
        <?=$article['context']?>
    </p>
    <p>
        <b>Автор:</b>
        <?=$article['first_name'] . ' ' . $article['last_name']?>
    </p>
    <p>
        <b>Дата:</b>
        <?=$article['create_date']?>
    </p>
</ul>
<hr/>
<small><a href="http://prog-school.ru">Школа Программирования</a> &copy;</small>
</body>
</html>
