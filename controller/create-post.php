<?php
    //i need this because its trying to connect to the information in the database.
    require_once(__DIR__ . "/../model/config.php");
    
    //this post lets me know what getting posted on the webpage.
    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
    $post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);  
    // $date is the date of the day we are on and will update.
    $date = new DateTime('today');
    // $time is the time of the locatin we are in.
    $time = new DateTime('America/Los_Angeles');
    //this receives the post.
    // this will also insert something onto the table on php myadmin
    $query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title', post = '$post'");
    
    if($query) {
        echo "<p>Successfully inserted post: $title</p>";
        echo "Posted on: " . $date->format("m/d/y"); " at " . $time->format("G:i");
    } 
    else {
        echo "<p>" . $_SESSION["connection"]->error . "</p>";
    }
    
    