<?php
/**
 * Created by PhpStorm.
 * User: traktor
 * Date: 29.01.14
 * Time: 20:16
 */

function __autoload($classname) {
    if (!include_once("controller/$classname.php")) die('Не понял...');
}

$action = 'action_';
$action .= (isset($_GET['act'])) ? $_GET['act'] : 'index';
$controller = ucfirst((isset($_GET['c'])) ? $_GET['c'] : 'article');            // немного магии
$controller = new $controller;

/*
switch ($_GET['c']) {
    case 'page': {
        $controller = new Page();
        break;
    }
    case 'articles': {
        $controller = new Article();
        break;
    }
    default: {
        $controller = new Article();
    }
}
*/
$controller->Request($action);

?>
