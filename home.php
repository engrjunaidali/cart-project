<?php

if(isset($_GET['action'])){

    $action = $_GET['action'];
    if ($action == "home"){
        include "index.php";
    }elseif ($action == "login" || $action == "logout" ){
        include "login.php";
    } elseif ($action == "register"){
        include "registration.php";
    }
};



?>