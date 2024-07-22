<?php namespace Controller;

use Core\HttpRequest;
use Core\HttpReqAttr;
use Core\HttpResponse;

//*Déclaration de la classe Router
class Router{
    private BaseController $controllerInstance;

    //*Constructeur
    public function __construct(){
        //Obtient la première partie de la route depuis la requête HTTP.
        $table = HttpRequest::get(HttpReqAttr::ROUTE)[0];
        //Construit le nom de la classe du contrôleur en capitalisant le premier caractère de la route ou en utilisant "Home" si la route est vide.
        $controllerClassName = "Controller\\".ucfirst(empty($table) ? "Home" : $table)."Controller";
        //Construit le chemin du fichier du contrôleur.
        $controllerFilePath = "$controllerClassName.php";
        //Vérifie si le fichier du contrôleur existe et envoie une réponse "Not Found" si ce n'est pas le cas.
        HttpResponse::SendNotFound(!file_exists($controllerFilePath));
        //Obtient la méthode de la route et la convertit en minuscule.
        $method = strtolower(HttpRequest::get(HttpReqAttr::ROUTE));
        //Obtient l'ID de la route ou 0 si non défini.
        $id = intval(HttpRequest::get(HttpReqAttr::ROUTE)[1] ?? 0);
        //Crée une instance du contrôleur avec l'ID et la méthode spécifiés.
        $this->controllerInstance = new $controllerClassName($id, $method);
    }

    //*Méthode "start"
    public function start() : void
    {
        $this->controllerInstance->execute();
    }

}