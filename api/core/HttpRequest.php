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
    private function __construct(){
        $this->method = $_SERVER['REQUEST_METHOD'];
        $parsed_url = parse_url(filter_var(trim($_SERVER['REQUEST_URI'], "/"), FILTER_SANITIZE_URL));
        $this->routeParts = explode("/", $parsed_url["path"]);
        parse_str($parsed_url["query"] ?? "", $this->queryParams);
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

//*ANALYSER LE BODY CONTENU DANS LA REQUÊTE

    private function parseBody(){
        //Initialisation d'un tableau vide $body qui sera utilisé pour stocker les données du corps de la requête.
        $body = [];
        //'SWITCH' vérifie la méthode HTTP, si la méthode est POST ou PUT, le bloc de code correspondant est exécuté.
        switch ($this->method) {
            case 'POST' : 
            case 'PUT' : 
                //Permet d'obtenir les données envoyées par le client.
                $input = file_get_contents('php://input');
                //On récupère le type de contenu de la requête HTTP depuis la superglobale $_SERVER. Si CONTENT_TYPE n'est pas défini, une chaîne vide est utilisée par défaut.
                $contentType = $_SERVER['CONTENT_TYPE'] ?? '';

                //Traitement des Données en Fonction du Type de Contenu
                if (strpos($contentType, 'application/json') !== false) {
                    $body = json_decode($input, true);
                } else {
                    parse_str($input, $body);
                }
                break;
        }
        return $body;
    }
    public static function get(HttpReqAttr $option = HttpReqAttr::INSTANCE)
    {
        if(is_null(self::$instance)){
            self::$instance = new HttpRequest();
        }
        if ($option == HttpReqAttr::INSTANCE) {
            return self::$instance;
        }
        return self::$instance->{$option->value};
    }

}

//*Déclaration de l'énumération
//type de l"énumération (ici string)
enum HttpReqAttr: string
{
//Les différentes cases définies dans l'énumération HttpReqAttr sont :
case INSTANCE = "instance";
case METHOD = "method";
case ROUTE = "route";
case PARAMS = "params";
case BODY = "body";
}

