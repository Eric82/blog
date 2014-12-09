<?php
    //i need this because its trying to connect to the information in the database.
    require_once(__DIR__ . "/../model/config.php");
    
    //this post lets me know what getting posted on the webpage.
    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
    $post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
    $date = new DataTime('today');
    $time = new DataTime('America/Los_Angeles');
    //this receives the post.
    // this will also insert something onto the table on php myadmin
    $query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title', post = '$post'");
    
    if($query) {
        echo "<p>Successfully inserted post: $title</p>";
        echo "Posted on: " . $date->format("M/D/Y"); " at " . $time->format("g:i")
    } 
    else {
        echo "<p>" . $_SESSION["connection"]->error . "</p>";
    }
    