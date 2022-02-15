<?php
class AboutController
{
    public function __construct()
    {
        $db = new dbConnection;
        $this->conn = $db->conn;
    }

    public function setTitle($args)
    {
        $query = "UPDATE `website_about` SET `title`= '$args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }

    public function setSubTitle($args)
    {
        $query = "UPDATE `website_about` SET `subtitle`= '$args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }

    public function setContent($args)
    {
        $query = "UPDATE `website_about` SET `content`= '$args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }

    public function setImage($args)
    {
        $query = "UPDATE `website_about` SET `image`= '$args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }

    public function setContent1($args)
    {
        $query = "UPDATE `website_about` SET `content1`= '$args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }
    public function setContent2($args)
    {
        $query = "UPDATE `website_about` SET `content2`= '$args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }
    public function setContent3($args)
    {
        $query = "UPDATE `website_about` SET `content3`= '$args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }

    public function getAbout()
    {
        $query = "SELECT * FROM `website_about` WHERE 1;";
        $result = $this->conn->query($query);

        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }

}
