<?php
class SettingController{

    public function __construct(){
        $db = new dbConnection;
        $this->conn = $db->conn;
    }

    public function upload($filename){
        $query = "UPDATE `website_settings` SET `website_logo`= '$filename' WHERE 1";
        //$upload_query = "INSERT INTO website_settings (website_logo) VALUES ('$filename')";
        $result = $this->conn->query($query);
        return $result;
    }

    public function getTitle(){
        $query = "SELECT `website_title` FROM `website_settings` WHERE 1;";
        $result = $this->conn->query($query);

        if($result->num_rows > 0){
            return $result; 
        }else{
            return false;
        }
    }

    public function settitle($filename){
        $query = "UPDATE `website_settings` SET `website_title`= '$filename' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }

    

    public function setTagline($filename){
        $query = "UPDATE `website_settings` SET `website_tagline`= '$filename' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }
}

