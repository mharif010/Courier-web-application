<?php
class topbarController
{
    public function __construct()
    {
        $db = new dbConnection;
        $this->conn = $db->conn;
    }

    public function setPhone($topbar_phone)
    {
        $query = "UPDATE `website_topbar` SET `site_phone`= '$topbar_phone' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }

    public function getTopbar()
    {
        $query = "SELECT * FROM `website_topbar` WHERE 1;";
        $result = $this->conn->query($query);

        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function setTopbg($topbar_bg)
    {
        $query = "UPDATE `website_topbar` SET `site_bg`= '$topbar_bg' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }

}
