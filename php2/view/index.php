<?
/*
Шаблон главной страницы страницы - все статьи
=======================
$articles - список статей

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
    <b>Главная</b> |
    <a href="editor.php">Консоль редактора</a>
    <hr/>
    <ul>
        <li>
            <b><a href="new.php">Новая статья</a></b>
        </li>
        <? foreach ($articles as $article): ?>
            <li>
                <a href="article.php?id_article=<?=$article['id_article']?>">
                    <?=$article['subject']?>
                </a><br />
                <?=$article['context']?>
            </li>
        <? endforeach ?>
    </ul>
    <hr/>
    <small><a href="http://prog-school.ru">Школа Программирования</a> &copy;</small>
</body>
</html>
