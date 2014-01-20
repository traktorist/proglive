<?php
/**
 * Created by PhpStorm.
 * User: traktor
 * Date: 19.01.14
 * Time: 23:19
 */

require_once('/config.php');
require_once('/functions.php');

$id_article = $_GET['id_article'];
ConnectDB();

$query = mysql_query("UPDATE `proglive_php2`.`articles` SET `subject` = 'auto_edited_subject',
                                                            `context` = 'auto_edited_context'
                                                        WHERE `articles`.`id_article` = $id_article;");

echo ($query) ? 'Статья изменена.' : 'Произошла ошибка при изменении!';



?>
