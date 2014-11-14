<?php
//this calls and gets the information that is stored in database.php
//the dir concantinates the path to the file
    require_once (__DIR__ . "/../model/config.php");
    //this finds the code and checks if its there and connects with the server mysqli
    $connection = new mysqli($host, $username, $password);
    //this code checks if the connection was successful.
    if($connection->connect_error){
        die("Error:" . $connection->connect_error);
    }
    //this checks if its true or not true and thats why its called $exists
    $exists = $connection->select_db($database); 
    //in this line it checkes if the connection went through and if it successed
    if(!$exists){
        //this is creating the database file 
        $query = $connection->query("CREATE DATABASE $database");
        //this wants to output a message.
        if($query) {
            echo "<p>Successfully created database: " . $database . "</p>";
        }
    }
    else {
        echo "Database has already exists.";    
    }
    
    $query = $connection->query("CREATE TABLE posts ("
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
        echo"<p>$connection->error</p>";
    }
    $connection->close();