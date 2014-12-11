<?php
    require_once(__DIR__ . "/../model/config.php");
    // this is for the user to type in their information email username and password.
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
    //this will allow us to see the registering process for the user 
    echo $email . " - " . $username . " - " . $password;