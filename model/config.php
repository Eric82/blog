<?php

    require_once (__DIR__ . "/database.php");
    session_start();

    $path = "/Eric-blog/";
    //this is the information we use to log in phpmyadmin
    $host = "localhost";
    $username = "root";
    $password = "root";
    $database = "blog_db";
    //session is a new dataabase variable.
    if(!isset($_SESSION["connection"])) {
        $connection = new Database($host, $username, $password, $database);
        $_SESSION["connection"] = $connection;
    }
    
    