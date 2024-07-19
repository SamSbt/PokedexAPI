<?php

namespace Controller;

class Router
{
  public function __construct()
  {
    
  }
}
$uri = parse_url($SERVER['REQUESTURI'])['path'];

$routes = [
  '/' => __DIR__ . '../controller/PokemonController.php',
];

function routeToController($uri, $routes)
{
  if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
    // } else {
    //  abort();
  }
}

// function abort($code = 404)
// {
//   http_response_code($code);
//   require __DIR . "/src/views/{$code}.php";
//   die();
// }

routeToController($uri, $routes);
