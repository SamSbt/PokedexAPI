<?php

use Core\HttpResponse;

function autoload($className)
{
    $classFilePath = lcfirst("$className.php");
    if (file_exists($classFilePath)) {
        require_once $classFilePath;
    }
}
spl_autoload_register("autoload");

HttpResponse::SendOK("ok");

    // $router = new Controller\Router();
    // $router->start();