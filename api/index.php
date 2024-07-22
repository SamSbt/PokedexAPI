<?php

use Controller\Router;
use Core\HttpReqAttr;
use Core\HttpRequest;
use Core\HttpResponse;

function autoload($className)
{
    $classFilePath = lcfirst("$className.php");
    if (file_exists($classFilePath)) {
        require_once $classFilePath;
    }
}
spl_autoload_register("autoload");

// $httpRequest = new HttpRequest();

    $router = new Router();
    $router->start();


// $instance1 = HttpRequest::get();
// $instance2 = HttpRequest::get(HttpReqAttr::INSTANCE);
// $method = HttpRequest::get(HttpReqAttr::METHOD);
// $route = HttpRequest::get(HttpReqAttr::ROUTE);
// $params = HttpRequest::get(HttpReqAttr::PARAMS);
// $body = HttpRequest::get(HttpReqAttr::BODY);
// $bp = true;