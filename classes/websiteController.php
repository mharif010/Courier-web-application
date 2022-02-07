<?php

class websiteController {

    public function __construct(){
        $db = new dbConnection;
        $this->conn = $db->conn;
    }

    public function logo(){
        $query = "SELECT `website_logo` FROM `website_settings` WHERE 1;";
        $result = $this->conn->query($query);

        if($result->num_rows > 0){
            return $result; 
        }else{
            return false;
        }
    }
}