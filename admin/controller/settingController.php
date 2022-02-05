<?php
class LogoController{

    public function __construct(){
        $db = new dbConnection;
        $this->conn = $db->conn;
    }

    public function upload( $title, $tagline, $filename ){
        $upload_query = "UPDATE `website_settings` SET `website_title`='$title',`website_tagline`='$tagline', `website_logo`= '$filename' WHERE 1";
        //$upload_query = "INSERT INTO website_settings (website_logo) VALUES ('$filename')";
        $result = $this->conn->query($upload_query);
        return $result;
    }
}

