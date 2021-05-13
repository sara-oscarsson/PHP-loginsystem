<?php
include_once("../classes/user.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($_POST["endpoint"] == "saveuser") {
        if(isset($_POST["newUser"])){
            $newUser = json_decode($_POST["newUser"], true);
            $user = new User();
            echo json_encode($user->createUser($newUser));
            exit;
        }
    }



}