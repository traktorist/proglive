<?php
/**
 * Created by PhpStorm.
 * User: traktor
 * Date: 19.01.14
 * Time: 13:01
 */

require_once('/config.php');
require_once('/functions.php');

echo 'This is php2 lessons, mother father!' . '<br /><br /><br />';
ConnectDB();

$q_all_articles = mysql_query("SELECT * FROM `articles` LEFT JOIN `users` USING (`id_user`) ORDER BY `articles`.`create_date` DESC;");
while ($article = mysql_fetch_array($q_all_articles)) {
    echo 'Тема: ' . $article['subject'] . '<br />Тело: ' . $article['context'] . '<br />Автор: ' . $article['first_name'] . ' ' . $article['last_name'] . '<br />Дата: ' . $article['create_date'] . '<br /><br />----------<br /><br />';
}

?>

