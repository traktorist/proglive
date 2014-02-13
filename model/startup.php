<?php

function startup() {
	// Настройки подключения к БД.
	$hostname = 'localhost'; 
	$username = 'proglive_php2';
	$password = 'proglive_php2_pass';
	$dbName = 'proglive_php2';
	
	// Языковая настройка.
	setlocale(LC_ALL, 'ru_RU.UTF8');
	
	// Подключение к БД.
    $link = mysql_connect($hostname, $username, $password) or die('No connect with data base');
    mysql_set_charset(ENCODING, $link); 													                                    // установка кодировки соединения с БД
	mysql_select_db($dbName) or die('No data base');

	// Открытие сессии.
	session_start();		
}
