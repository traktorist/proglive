<?php//// Базовый контроллер сайта.//abstract class C_Base extends C_Controller {	protected $title;		    // заголовок страницы    protected $center_page;		// содержание страницы	//	// Конструктор.	//	function __construct() {        include_once('/controller/c_startup.php');        include_once('/model/m_articles.php');        include_once('/model/m_functions.php');	}		protected function before() {        // установка параметров, подключение к БД, старт сессии        startup();        $this->title = 'PHP. Уровень 2';		$this->center_page = '';	}		//	// Генерация базового шаблонаы	//		public function render() {        $page = $this->Template('/view/v_main.php', array(  'title' => $this->title,                                                            'center_page' => $this->center_page));        echo $page;	}	}