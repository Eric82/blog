<?php

//stores all the variables of the code thats repeated.
//a class allows you to do things with multiple variables and objects. It gets the information form line 12.
class Database {

    private $connection;
    private $host;
    private $username;
    private $password;
    private $database;

    //this will call a function so that it grabs the information from create-db
    public function __construct($host, $username, $password, $database) {
        //this will access the global variables
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;

        //this finds the code and checks if its there and connects with the server mysqli
        $this->connection = new mysqli($host, $username, $password);
        //this code checks if the connection was successful.
        if ($this->connection->connect_error) {
            die("Error:" . $this->connection->connect_error);
        }
        //this checks if its true or not true and thats why its called $exists
        $exists = $this->connection->select_db($database);

        //in this line it checkes if the connection went through and if it successed
        if (!$exists) {
            //this is creating the database file 
            $query = $this->connection->query("CREATE DATABASE $database");
            //this wants to output a message.
            if ($query) {
                echo "<p>Successfully created database: " . $database . "</p>";
            }
        } else {
            echo "Database has already exists.";
        }
    }

    public function openConnection() {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

        //this code checks if the connection was successful.
        if ($this->connection->connect_error) {
            die("Error:" . $this->connection->connect_error);
        }
    }

    //close the function that was opened
    // we also want to call this variable and checks if it works correctly
    public function closeConnection() {
        if (isset($this->connection)) {
            $this->connection->close();
        }
    }

    public function query($string) {
        $this->openConnection();
        // this will run the query in the database and use the srting of text.  
        $query = $this->connection->query($string);

        $this->closeConnection();

        return $query;
    }

}
