<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['loginName']) && isset($_POST['loginPwd'])) {
        $loginName = json_decode($_POST['loginName']);
        $loginPwd = json_decode($_POST['loginName']);
        echo json_encode('username you put in: ' . $loginName . ' password you put in: ' . $loginPwd);
        
        exit;

    }
}