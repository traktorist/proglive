<?php
//
// Помощник работы с БД
//
class M_MySQL {
	private static $instance;
	
	public static function Instance() {
		if (self::$instance == null) self::$instance = new self();
		return self::$instance;
	}
	
	private function __construct() {
        $this->mFunctions = M_Functions::Instance();

        // подключение к БД
        $link = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die('<br />Не могу соединиться с MySQL:<br />' . mysql_error());        // коннект с MySQL
        mysql_select_db(DB_NAME, $link) or die("<br />Не могу подключиться к базе " . DB_NAME . "<br />" . mysql_errno() . " - " . mysql_error() . "<br />");
        mysql_set_charset(ENCODING, $link); 													                                    // установка кодировки соединения с БД
	}
	
	//
	// Выборка строк
	// $query    	- полный текст SQL запроса
	// результат	- массив выбранных объектов
	//
	public function Select($query) {
		$result = mysql_query($query);

        if (!$result) return false;

        // Извлечение из БД.
        while ($row = mysql_fetch_array($result)) {
            $row['content_intro'] = $this->mFunctions->content_intro($row['content']);
            $articles[] = $row;
        }

        return $articles;
	}
	
	//
	// Вставка строки
	// $table 		- имя таблицы
	// $object 		- ассоциативный массив с парами вида "имя столбца - значение"
	// результат	- идентификатор новой строки
	//
	public function Insert($table, $object) {
		$columns = array();
		$values = array();
	
		foreach ($object as $key => $value) {
			$key = $this->mFunctions->protect($key);
			$columns[] = $key;
			
			if ($value === null) {
				$values[] = 'NULL';
			}
			else {
				$value = $this->mFunctions->protect($value);
				$values[] = "'$value'";
			}
		}

		$columns_s = implode(',', $columns);
		$values_s = implode(',', $values);

		$query = "INSERT INTO $table ($columns_s) VALUES ($values_s)";
		$result = mysql_query($query);

		if (!$result) die(mysql_error());
			
		return mysql_insert_id();
	}
	
	//
	// Изменение строк
	// $table 		- имя таблицы
	// $object 		- ассоциативный массив с парами вида "имя столбца - значение"
	// $where		- условие (часть SQL запроса)
	// результат	- число измененных строк
	//	
	public function Update($table, $object, $where) {
		$sets = array();
	
		foreach ($object as $key => $value) {
			$key = $this->mFunctions->protect($key);
			
			if ($value === null) {
				$sets[] = "$value = NULL";
			}
			else {
				$value = $this->mFunctions->protect($value);
				$sets[] = "$key = '$value'";
			}
		}

		$sets_s = implode(',', $sets);
		$query = "UPDATE $table SET $sets_s WHERE $where";
		$result = mysql_query($query);
		
		if (!$result) die(mysql_error());

		return $result;
	}
	
	//
	// Удаление строк
	// $table 		- имя таблицы
	// $where		- условие (часть SQL запроса)
	// результат	- число удаленных строк
	//
	public function Delete($table, $where) {
		$query = "DELETE FROM $table WHERE $where";
		$result = mysql_query($query);
						
		if (!$result) die(mysql_error());

		return mysql_affected_rows();
	}
}

?>
