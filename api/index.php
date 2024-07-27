<?php

use Controller\Router;

function autoload($className)
{
    $classFilePath = lcfirst("$className.php");
    if (file_exists($classFilePath)) {
        require_once $classFilePath;
    }
}
spl_autoload_register("autoload");

$router = new Router();
$router->start();
