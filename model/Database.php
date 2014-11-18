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
    }

    public function openConnection() {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

        //this code checks if the connection was successful.
        if ($this->connection->connect_error) {
            die("Error:" . $this->connection->connect_error);
        }
    }

    public function closeConnection() {
        
    }

    public function query($string) {
        
    }

}
