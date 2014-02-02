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


<div class="center">
    <? if ($add_success): ?>
        <b style="color: lime;">Статья добавлена.</b>
    <? endif; ?>
    <ul>
        <li>
            <b><a href="/index.php?c=article&act=new">Новая статья</a></b>
        </li>
        <? foreach ($articles as $article): ?>
            <li>
                <a href="/index.php?c=article&act=article&id_article=<?=$article['id_article'];?>">
                    <?=$article['subject'];?>
                </a><br />
<!--                --><?//=$article['content'];?>
                <?=$article['content_intro'];?>
            </li>
        <? endforeach; ?>
    </ul>
</div>
