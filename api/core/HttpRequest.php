<?php namespace Core;

class HttpRequest 
{
//*PROPRIÉTÉS (méthode HTTP, parties de la route, paramètres de l'url en Get, le Body contenu dans la requête)
    private $method;
    private $routeParts;
    private $queryParams;
    private $body;

//*INSTANCE UNIQUE DE LA CLASSE (singleton)
    private static $instance = null;

//*CONSTRUCTEUR
    public function __construct(){
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->routeParts = $this->parseRoute();
        $this->queryParams = $_GET;
        $this->body = $this->parseBody();
    }

    
//* MÉTHODE STATIQUE POUR OBTENIR L'INSTANCE UNIQUE (singleton)
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

//*LES GETTER
    public function getMethod(){
        return $this->method;
    }

    public function getRouteParts(){
        return $this->routeParts;
    }

    public function getQueryParams(){
        return $this->queryParams;
    }

    public function getBody(){
        return $this->body;
    }


//*ANALYSER LES DIFFÉRENTES PARTIES DE LA ROUTE
    private function parseRoute(){
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $route = trim($uri, '/');
        $routeParts = explode('/', $route);
        return $routeParts;
    }

//*ANALYSER LE BODY CONTENU DANS LA REQUÊTE

    private function parseBody(){
        $body = [];

        switch ($this->method) {
            case 'POST' : 
            case 'PUT' : 
                parse_str(file_get_contents('php://input'), $body);
                break;
        }
        return $body;
    }

}