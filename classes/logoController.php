<?php
class LogoController{

    public function __construct(){
        $db = new dbConnection;
        $this->conn = $db->conn;
    }

    public function upload( $filename ){
        $upload_query = "INSERT INTO logos (filename) VALUES ('$filename')";
        $result = $this->conn->query($upload_query);
        return $result;
    }
    
    
}