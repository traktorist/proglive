<?php
/**
 * Created by PhpStorm.
 * User: traktor
 * Date: 19.01.14
 * Time: 23:12
 */

require_once('/config.php');
require_once('/functions.php');

$id_article = $_GET['id_article'];
ConnectDB();

$query = mysql_query("DELETE FROM `proglive_php2`.`articles` WHERE `articles`.`id_article` = $id_article;");

echo ($query) ? 'Статья удалена.' : 'Произошла ошибка при удалении!';

?>
