<?php

include_once('../controller/c_startup.php');
require_once('classes.php');

// Здесь разместить код, использующий классы из classes.php

// 1. Написать код, который будет использовать классы из файла classes.php следующим образом: создаст 3 экземплера класса NewsArticle и 3 экземпляра класса CrossArticle. После чего эти объекты будут добавлены в объект списка статей (экземпляр класса ArticleList) с помощью метода add().
$news_article_1 = new NewsArticle(1, 'subject_news_1', 'content_news_1');
$news_article_2 = new NewsArticle(2, 'subject_news_2', 'content_news_2');
$cross_article_1 = new CrossArticle(3, 'subject_cross_1', 'content_cross_1', 'copy_1');
$cross_article_2 = new CrossArticle(4, 'subject_cross_2', 'content_cross_2', 'copy_2');
$article_list = new ArticleList();

$article_list->add($news_article_1);
$article_list->add($news_article_2);
$article_list->add($cross_article_1);
$article_list->add($cross_article_2);

// 2. Создать потомка класса Article, который будет отвечать за статьи, у которых есть прикреплённое изображение. Создать несколько таких статей и добавить в существующий список (экземпляр класса ArticleList).
$article_attach_1 = new AttachArticle(5, 'subject_attach_1', 'content_attach_1', 'attach_1');
$article_attach_2 = new AttachArticle(6, 'subject_attach_2', 'content_attach_2', 'attach_2');

$article_list->add($article_attach_1);
$article_list->add($article_attach_2);




?>
