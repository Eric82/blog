<?php
    $path = "/Eric-blog/";
    //this is the information we use to log in phpmyadmin
    $host = "localhost";
    $username = "root";
    $password = "root";
    $database = "blog_db";   
    
    $connection = new Database($host, $username, $password, $database);