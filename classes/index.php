<?php

require_once 'classes.php';

// Здесь разместить код, использующий классы из classes.php

//
// 1. Написать код, который будет использовать классы из файла classes.php следующим образом: создаст 3 экземплера класса NewsArticle и 3 экземпляра класса CrossArticle. После чего эти объекты будут добавлены в объект списка статей (экземпляр класса ArticleList) с помощью метода add().
//
$news_article_1 = new NewsArticle(1, 'title_news_1', 'content_news_1');
$news_article_2 = new NewsArticle(2, 'title_news_2', 'content_news_2');
$cross_article_1 = new CrossArticle(3, 'title_cross_1', 'content_cross_1', 'copy_1');
$cross_article_2 = new CrossArticle(4, 'title_cross_2', 'content_cross_2', 'copy_2');
$article_list = new ArticleList();

$article_list->add($news_article_1);
$article_list->add($news_article_2);
$article_list->add($cross_article_1);
$article_list->add($cross_article_2);


?>
