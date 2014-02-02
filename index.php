<?php
/**
 * Created by PhpStorm.
 * User: traktor
 * Date: 29.01.14
 * Time: 20:16
 */

function __autoload($classname) {
    include_once("c/$classname.php");
}

$action = 'action_';
$action .= (isset($_GET['act'])) ? $_GET['act'] : 'index';

switch ($_GET['c']) {
    case 'page': {
        $controller = new C_Page();
        break;
    }
    case 'articles': {
        $controller = new C_Article();
        break;
    }
    default: {
        $controller = new C_Article();
    }
}

$controller->Request($action);
