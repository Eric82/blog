<?php
    require_once(__DIR__ . "/../model/config.php");
    // this is for the user to type in their information email username and password.
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
    //this will allow us to see the registering process for the user 
    echo $password;
    
    $salt = "$5$" . "rounds=5000$" . uniqid(mt_rand(), true) . "$";
    // this will make our password Encrypted
    $hashedPassword = crypt ($password, $salt);
    // inserts the information.
    $query = $_SESSION["connection"]->query("INSERT INTO users SET "
            . "email = '$email',"
            . "username = '$username',"
            . "password = '$hashedPassword',"
            . "salt = '$salt'");
    
    if($query) {
        echo "Successfully created user: $username";
    }
    else { 
        echo "<p>" . $_SESSION["connection"]->error . "</p>";
    } 