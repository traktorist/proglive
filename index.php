<?php
/**
 * Created by PhpStorm.
 * User: traktor
 * Date: 29.01.14
 * Time: 20:16
 */

function __autoload($classname) {
    include_once("controller/$classname.php");
}

$action = 'action_';
$action .= (isset($_GET['act'])) ? $_GET['act'] : 'index';

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

$controller->Request($action);
