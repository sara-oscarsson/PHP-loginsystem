<?php 
class User{
    function __construct(){
        include_once("../db/databasehandler.php");
        $this->db = new Database();
    }
    public function createUser($newUser){
        $db = new Database();
        $newUser['password'] = password_hash($newUser['password'], PASSWORD_DEFAULT);
        return $db->editDatabase("INSERT INTO user (username, password, id) VALUES (:username, :password, NULL);", $newUser);    
    }
}