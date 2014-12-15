<?php
    require_once(__DIR__ . "/../model/config.php");
    
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
    // this statement will let us grab information frm the user
    $query = $_SESSION["connection"]->query("SELECT salt, password FROM users WHERE username = '$username'");
    //this tells that if they use the correct password for the user then they can access their account and that one user will be stored in the query.
    if($query->num_rows == 1) {
        $row = $query->fetch_array();
        //crypt checks password and checks for uppercase and loswer case
        if($row["password"] === crypt ($password, $row["salt"])) {
            echo "<p>Log in Successful</p>";
        }
        else{
            echo "<p>Invalid username and password</p>";
        }
    }
    else {
        echo "<p>Invalid username and password</p>";
    }