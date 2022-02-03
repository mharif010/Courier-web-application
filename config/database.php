<?php

class dbConnection{

    public function __construct(){

        $conn = new mysqli( DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE );
        if($conn->connect_error){
            die();
        }
       return $this->conn = $conn;
        
    }

}