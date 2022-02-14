<?php 
class BannerController{

    public function __construct()
    {
        $db = new dbConnection;
        $this->conn = $db->conn;
    }

    public function setIcon($Args){
        $query = "UPDATE `website_banner` SET `banner_icon`= '$Args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }

    public function setBanner_lt1($Args){
        $query = "UPDATE `website_banner` SET `banner_lt1`= '$Args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }
    public function setBanner_lu1($Args){
        $query = "UPDATE `website_banner` SET `banner_lu1`= '$Args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }
    public function setBanner_lt2($Args){
        $query = "UPDATE `website_banner` SET `banner_lt2`= '$Args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }
    public function setBanner_lu2($Args){
        $query = "UPDATE `website_banner` SET `banner_lu2`= '$Args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }
    public function setBanner_lt3($Args){
        $query = "UPDATE `website_banner` SET `banner_lt3`= '$Args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }
    public function setBanner_lu3($Args){
        $query = "UPDATE `website_banner` SET `banner_lu3`= '$Args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }
    public function setBanner_heading($Args){
        $query = "UPDATE `website_banner` SET `banner_heading`= '$Args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }

    public function setBanner_btn($Args){
        $query = "UPDATE `website_banner` SET `banner_btn`= '$Args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }
    public function setBanner_btnUrl($Args){
        $query = "UPDATE `website_banner` SET `banner_btnUrl`= '$Args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }

    public function setBannerBg($Args){
        $query = "UPDATE `website_banner` SET `banner_bg`= '$Args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }

    public function getBanner()
    {
        $query = "SELECT * FROM `website_banner` WHERE 1;";
        $result = $this->conn->query($query);

        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }

}