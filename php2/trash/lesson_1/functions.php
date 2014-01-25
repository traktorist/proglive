<?php
/**
 * Created by PhpStorm.
 * User: traktor
 * Date: 19.01.14
 * Time: 19:04
 */

function ConnectDB () {
    $link = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die('<br />Не могу соединиться с MySQL:<br />' . mysql_error());        // коннект с MySQL
    mysql_select_db(DB_NAME, $link) or die("<br />Не могу подключиться к базе " . DB_NAME . "<br />" . mysql_errno() . " - " . mysql_error() . "<br />");
    mysql_set_charset('UTF8', $link); 													                                        // установка кодировки соединения с БД
}

?>
