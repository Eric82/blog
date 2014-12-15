<?php
    require_once(__DIR__ . "/../model/config.php");
    //this will check wheather the user logged in or not.
    function authenticateUser() {
        if(!isset($_SESSION["authenticated"])){
            return false;
        }
        else {
            if($_SESSION["authenticated"] != true) {
                return false;
            }
            else {
                return true;
            }
        }
    }