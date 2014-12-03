<?php
//this calls and gets the information that is stored in database.php
//the dir concantinates the path to the file
    require_once (__DIR__ . "/../model/config.php");

    $query = $_SESSION["connection"]->query("CREATE TABLE posts ("
            //the not null is like the value of the id and connects with it
           . "id int(11)NOT NULL AUTO_INCREMENT,"
           . "title varchar(255) NOT NULL,"
           . "post text NOT NULL,"
            //this code tells the table that the primry key is id 
           . "PRIMARY KEY (id))");
    
    if($query) {
        echo "Succesfully create table: posts";
    }    
    else{
        echo"<p>" . $_SESSION["connection"]->error . "</p>";
    }
    //THIS POST TABLE IS FOR OUR USERS AND THEY CAN PUT THERE INFORMATION ACCORDING TO THE TABLE.
    $query = $_SESSION["connection"]->query("CREATE TABLE users ("
            . "id int(11) NOT NULL AUTO_INCREMENT,"
            . "username varchar (30) NOT NULL,"
            . "email varchar(50) NOT NULL,"
            . "passwrod char (128) NOT NULL,"
            . "salt char(128) NOT NULL,"
            . "PRIMARY KEY (id))");
    
    if($query){
        echo "<p>Successfully created table: users</p>";
    } 
    else {
        echo "<p>" . $_SESSION["connection"]->error . "</p>";
    }
    