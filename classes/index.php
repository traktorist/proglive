<?php

include_once('../controller/c_startup.php');
require_once('classes.php');

// Здесь разместить код, использующий классы из classes.php

$news_article_1 = new NewsArticle(1, 'subject_news_1', 'content_news_1');
$news_article_2 = new NewsArticle(2, 'subject_news_2', 'content_news_2');
$cross_article_1 = new CrossArticle(3, 'subject_cross_1', 'content_cross_1', 'copy_1');
$cross_article_2 = new CrossArticle(4, 'subject_cross_2', 'content_cross_2', 'copy_2');
$article_attach_1 = new AttachArticle(5, 'subject_attach_1', 'content_attach_1', 'attach_1');
$article_attach_2 = new AttachArticle(6, 'subject_attach_2', 'content_attach_2', 'attach_2');


$article_list = new ArticleList();

$article_list->add($news_article_1);
$article_list->add($news_article_2);
$article_list->add($cross_article_1);
$article_list->add($cross_article_2);
$article_list->add($article_attach_1);
$article_list->add($article_attach_2);


$reverse_article_list = new ReverseArticleList($article_list);


$alt_reverse_article_list = new AltReverseArticleList();

$alt_reverse_article_list->add($news_article_1);
$alt_reverse_article_list->add($news_article_2);
$alt_reverse_article_list->add($cross_article_1);
$alt_reverse_article_list->add($cross_article_2);
$alt_reverse_article_list->add($article_attach_1);
$alt_reverse_article_list->add($article_attach_2);


$article_list->view();
$reverse_article_list->view();
$alt_reverse_article_list->view();

?>
