<?php
    //i need this because its trying to connect to the information in the database.
    require_once(__DIR__ . "/../mode/database.php");

    $connection = new mysqli($host, $username, $password, $database);
    //this post lets me know what getting posted on the webpage.
    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
    $post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
    //this receives the post.
    echo "<p>Title: $title</p>";
    echo "<p>Post: $post</p>";
    
    $connection->close();
    