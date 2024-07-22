<?php

namespace Controller;

use Core\HttpReqAttr;
use Core\HttpRequest;
use Core\HttpResponse;

class Router
{
  private BaseController $controllerInstance;

  public function __construct()
  {
    $table = HttpRequest::get(HttpReqAttr::ROUTE)[0];
    $controllerClassName = "Controller\\" . ucfirst(empty($table) ? "Pokemon" : $table) . "Controller";
    $controllerFilePath = "$controllerClassName.php";
    HttpResponse::SendNotFound(!file_exists($controllerFilePath));
    $method = strtolower(HttpRequest::get(HttpReqAttr::METHOD));
    $id = intval(HttpRequest::get(HttpReqAttr::ROUTE)[1] ?? 0);
    $this->controllerInstance = new $controllerClassName($method, $id);


    // $route = filter_var(trim($_SERVER["REQUEST_URI"], '/'), FILTER_SANITIZE_URL);
    // $routeParts = explode('/', $route);
    // $controllerName = ucfirst(array_shift($routeParts));
    // if (empty($controllerName)) {
    //   $controllerName = "Home";
    // }
    // $controllerClassName = "Controllers\\" . $controllerName . "Controller";
    // $controllerFilePath = lcfirst($controllerClassName) . ".php";
    // HttpResponse::SendNotFound(!file_exists($controllerFilePath));
    // $this->controllerInstance = new $controllerClassName($routeParts);
  }

  public function start()
  {
    $this->controllerInstance->execute();
  }
}
