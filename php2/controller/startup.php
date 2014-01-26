<?php
/*
установка параметров, подключение к БД, старт сессии
*/

require_once('../config.php');

function startup()
{
	// подключение к БД
    $link = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die('<br />Не могу соединиться с MySQL:<br />' . mysql_error());        // коннект с MySQL
    mysql_select_db(DB_NAME, $link) or die("<br />Не могу подключиться к базе " . DB_NAME . "<br />" . mysql_errno() . " - " . mysql_error() . "<br />");

    // играем с кодировкой
    mysql_set_charset(ENCODING, $link); 													                                    // установка кодировки соединения с БД
    mb_internal_encoding(ENCODING);                                                                                             // установка внутренней кодировки скрипта
    setlocale(LC_ALL, 'ru_RU.' . ENCODING);                                                                                     // кодировка исполнения php

    session_start();                                                                                                            // старт сессии
}

?>
