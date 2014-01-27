<?
/*
Шаблон главной страницы страницы - все статьи
=======================
$articles - список статей

статья:
id_article - идентификатор
subject - заголовок
content - текст
*/
?>


<b>Главная</b> |
<a href="../controller/c_editor.php">Консоль редактора</a>
<hr/>
<? if($add_success): ?>
    <b style="color: lime;">Статья добавлена.</b>
<? endif ?>
<ul>
    <li>
        <b><a href="../controller/c_new.php">Новая статья</a></b>
    </li>
    <? foreach ($articles as $article): ?>
        <li>
            <a href="../controller/c_article.php?id_article=<?=$article['id_article']?>">
                <?=$article['subject']?>
            </a><br />
<!--                --><?//=$article['content']?>
            <?=$article['content_intro']?>
        </li>
    <? endforeach ?>
</ul>
