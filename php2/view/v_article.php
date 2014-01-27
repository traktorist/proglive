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


<div>
    <a href="../controller/c_index.php">Главная</a> |
    <a href="../controller/c_editor.php">Консоль редактора</a>
    <hr/>
    <ul>
        <p>
            <b>Тема:</b>
            <?=$article['subject']?>
        </p>
        <p>
            <b>Тело:</b>
            <?=$article['content']?>
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
</div>
<div>
    <?=$right_page?>
</div>
