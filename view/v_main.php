<?php
/**
 * Created by PhpStorm.
 * User: traktor
 * Date: 27.01.14
 * Time: 22:59
 */

/*
 * базовый шаблон, включающий хедер и футер
 * */

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <title><?=$title;?></title>
    <link rel="stylesheet" type="text/css" media="screen" href="/view/style.css" />
</head>
<body>
    <div id="block">
        <div class="header">
            <h1><?=$title;?></h1>
            <br />
        </div>
        <div class="top">
            <a href="/index.php?c=article&act=index">Главная</a> |
            <a href="/index.php?c=article&act=editor">Консоль редактора</a>
            <hr />
        </div>

        <div>
            <?=$center_page;?>
        </div>

        <div class="footer">
            <hr />
            <small><a href="http://prog-school.ru">Школа Программирования</a> &copy;</small>
        </div>
    </div>
</body>
</html>
