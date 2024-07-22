<?php namespace Controller;

use Core\HttpResponse;

//*Déclaration de la Classe BaseController avec propriétés $method et $id
class BaseController
{
private string $method;
protected int $id;

//*Constructeur avec les deux arguments $method et $id
public function __construct($method, $id)
{
    //Assigne la valeur de $method à la propriété $method.
    $this->method = $method;
    //Vérifie si la méthode spécifiée par $method n'existe pas dans la classe appelée.
    $methodDoesntExists = !method_exists(get_called_class(), $this->method);
    //Appelle la méthode statique SendNotFound de HttpResponse avec la variable $methodDoesntExists pour indiquer si la méthode n'existe pas.
    HttpResponse::SendNotFound($methodDoesntExists);
    //Assigne la valeur de $id à la propriété $id
    $this->id = $id;
}

//Méthode publique execute qui ne retourne rien (void).
public function execute() : void
{
    //Appelle dynamiquement la méthode spécifiée par $method et stocke le résultat dans $result.
    $result = $this->{$this->method}();
    var_dump($result);
}



}