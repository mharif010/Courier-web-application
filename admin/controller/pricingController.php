<?php
class pricingController
{
    public function __construct()
    {
        $db = new dbConnection;
        $this->conn = $db->conn;
    }

    public function setTitle($args)
    {
        $query = "UPDATE `website_pricing` SET `title`= '$args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }

    public function setSubTitle($args)
    {
        $query = "UPDATE `website_pricing` SET `sub_title`= '$args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }

    public function setContent($args)
    {
        $query = "UPDATE `website_pricing` SET `content_one`= '$args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }

    public function setContent2($args)
    {
        $query = "UPDATE `website_pricing` SET `content_two`= '$args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }

    public function setContent3($args)
    {
        $query = "UPDATE `website_pricing` SET `content_three`= '$args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }

    public function getPricing()
    {
        $query = "SELECT * FROM `website_pricing` WHERE 1;";
        $result = $this->conn->query($query);

        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }

}
