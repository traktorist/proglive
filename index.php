<?php
/**
 * Created by PhpStorm.
 * User: traktor
 * Date: 29.01.14
 * Time: 20:16
 */

function __autoload($classname) {
    $MVC = array('M' => 'model', 'V' => 'view', 'C' => 'controller');
    if (!include_once($MVC[$classname[0]] . "/" .$classname . ".php")) die('404');
}

$action = 'action_';
$action .= (isset($_GET['act'])) ? $_GET['act'] : 'index';
$controller = 'C_' . ucfirst((isset($_GET['c'])) ? $_GET['c'] : 'article');            // немного магии
$controller = new $controller;

$controller->Request($action);

?>
