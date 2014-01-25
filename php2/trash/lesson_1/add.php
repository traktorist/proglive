<?php
/**
 * Created by PhpStorm.
 * User: traktor
 * Date: 19.01.14
 * Time: 23:01
 */

require_once('/config.php');
require_once('/functions.php');

ConnectDB();

$query = mysql_query("INSERT INTO `proglive_php2`.`articles` ( `id_article`,
                                                                `subject`,
                                                                `content`,
                                                                `id_user`,
                                                                `create_date`)
                                                    VALUES (    NULL,
                                                                'auto_created_subject',
                                                                'auto_created_content',
                                                                '1',
                                                                '2032-01-01 23:59:59');");

echo ($query) ? 'Статья добавлена.' : 'Произошла ошибка при записи!';

?>
