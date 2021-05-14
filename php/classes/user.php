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
    public function checkLogin($inputPwd, $inputUserN){
        $db = new Database();
        $pwdFromdb = $db->collectFromDatabase("SELECT password FROM user WHERE username = '$inputUserN';");
        if(count($pwdFromdb) == 0){
            return "User doesn't exist";
        }if(password_verify($inputPwd, $pwdFromdb)){
            return 'success';
        }


    }
}