<?
include_once('startup.php');
include_once('model.php');

// установка параметров, подключение к БД, старт сессии
startup();

// Извлечение статьи если есть её id
if (!isset($_GET['id_article'])) die('Не указан id статьи!');
elseif(!$article = get_article($_GET['id_article'])) die('что-то пошло не так!');

// Вывод в шаблон.
include('view/article.php');

?>
