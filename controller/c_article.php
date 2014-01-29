<?
include_once('../controller/c_startup.php');
include_once('../model/m_articles.php');
include_once('../model/m_functions.php');

// установка параметров, подключение к БД, старт сессии
startup();

// Извлечение статьи если есть её id
if (!isset($_GET['id_article'])) die('Не указан id статьи!');
elseif(!$article = get_article($_GET['id_article'])) die('что-то пошло не так!');

// Вывод в шаблон.
$right_page = template('../view/v_right.php');
$center_page = template('../view/v_article.php', array( 'article' => $article,
                                                        'right_page' => $right_page));
$page = template('../view/v_main.php', array('center_page' => $center_page));

echo $page;

?>
