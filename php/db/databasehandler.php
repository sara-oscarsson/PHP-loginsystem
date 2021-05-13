<?php
/* PDO för att kommunicera med databasen */
class Database{
    function __construct(){
        $dns = "mysql:host=localhost;dbname=php-login-github";
        $user = "root";
        $pass = "";

        $this->db = new PDO("$dns", $user, $pass);
        $this->db->exec("set names utf8");
    }

    public $db;

    private function prepareQuery($query){
        return $this->db->prepare($query);
    }
    public function editDatabase($query, $entity){
        /* ta bort, spara, uppdatera */
        $preparedQuery = $this->prepareQuery($query);
        $status = $preparedQuery->execute($entity);
        return $status;
        /* array("status" =>$status, "Message" =>  ; */
    }
    public function collectFromDatabase($query){
        /* hämta */
        $preparedQuery = $this->prepareQuery($query);
        $preparedQuery->execute();
        return $preparedQuery->fetchAll(PDO::FETCH_OBJ);
        
    }
}