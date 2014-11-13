<?php
    //i need this because its trying to connect to the information in the database.
    require_once(__DIR__ . "/../model/database.php");
    
    $connection = new mysqli($host, $username, $password, $database);
    //this post lets me know what getting posted on the webpage.
    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
    $post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
    //this receives the post.
    // this will also insert something onto the table on php myadmin
    $query = $connection->query("INSERT INTO posts SET title = '$title', post = '$post'");
    
    if($query) {
        echo "<p>Successfully inserted post: $title</p>";
    } 
    else {
        echo "<p>$connection->error</p>";
    }
    
    $connection->close();
    