<?php
//this post lets me know what getting posted on the webpage.
    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
    $post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
    //this receives the post.
    echo "<p>Title: $title</p>";
    echo "<p>Post: $post</p>";