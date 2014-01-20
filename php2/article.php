<?php
/**
 * Created by PhpStorm.
 * User: traktor
 * Date: 19.01.14
 * Time: 22:48
 */

require_once('/config.php');
require_once('/functions.php');

$id_article = $_GET['id_article'];
ConnectDB();

$article = mysql_fetch_array(mysql_query("SELECT * FROM `articles` JOIN `users` USING (`id_user`) WHERE `articles`.`id_article` = $id_article;"));
echo 'Тема: ' . $article['subject'] . '<br />Тело: ' . $article['context'] . '<br />Автор: ' . $article['first_name'] . ' ' . $article['last_name'] . '<br />Дата: ' . $article['create_date'] . '<br /><br />----------<br /><br />';

?>
