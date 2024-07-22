<?php namespace Repositories;
use PDO;
use PDOException;

class BaseRepository
{
    //déclaration de la variable $connection
    private static $connection = null;

    //début de la méthode connect : elle vérifie que $connection est nulle et renvoie au fichier de config de la BDD
    private function connect(){
        if (self::$connection == null) {
            include_once "./api/config/db.config.php";
            //Connexion à la DB (création DSN + assignation var utilisateur et mdp)
            $dsn = "mysql:host=".DB_HOST.";port=".DB_PORT.";dbname=".DB_NAME;
            $user = DB_USER;
            $pass = DB_PASSWORD;
            //Création nouvelle instance de la classe PDO
            try {
                $connection = new PDO(
                    $dsn,
                    $user,
                    $pass,
                    array(
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                    )
                );
            } catch (PDOException $e) {
                $errorMessage = $e->getMessage();
                die("Erreur de connexion à la base de données : $errorMessage");
            }
            //Assignation de la connexion à la variable statique
            self::$connection = $connection;
        }
        return self::$connection;
    }

    //Requête préparée
    protected function preparedQuery($sql, $params = []){
        $statement = $this->connect()->prepare($sql);
        $result = $statement->execute($params);
        return (object)['result' => $result, 'statement' => $statement];
    }
}