<?/*Шаблон страницы редактора=======================$articles - список статейстатья:id_article - идентификаторtitle - заголовокcontent - текст*/?><div class="center">    <? if ($update_success): ?>        <b style="color: deepskyblue;">Статья изменена.</b>    <? endif; ?>    <? if ($delete_success): ?>        <b style="color: orangered;">Статья удалена.</b>    <? endif; ?>    <ul>        <li>            <b><a href="/index.php?c=article&act=new">Новая статья</a></b>        </li>        <? foreach ($articles as $article): ?>            <li>                <a href="/index.php?c=article&act=edit&id_article=<?=$article['id_article'];?>">                    <?=$article['subject'];?>                </a>            </li>        <? endforeach; ?>    </ul></div>