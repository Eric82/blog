<?php

    require_once (__DIR__ . "/database.php");
    //when you start a session the session gets an id and stays constant during the entire session.
    session_start();
    //this will regenerate the session so no one can mess with the account infromation kinda of like refreshing a page and it exits the last session.
    session_regenerate_id(true);

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
    
    