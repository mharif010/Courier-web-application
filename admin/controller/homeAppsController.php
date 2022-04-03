<?php
class homeAppsController
{
    public function __construct()
    {
        $db = new dbConnection;
        $this->conn = $db->conn;
    }

    public function setTitle($args)
    {
        $query = "UPDATE `website_apps` SET `title`= '$args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }

    public function setSubTitle($args)
    {
        $query = "UPDATE `website_apps` SET `subtitle`= '$args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }

    public function setContent($args)
    {
        $query = "UPDATE `website_apps` SET `content`= '$args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }
    public function setContent1($args)
    {
        $query = "UPDATE `website_apps` SET `content1`= '$args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }
    public function setContent2($args)
    {
        $query = "UPDATE `website_apps` SET `content2`= '$args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }

    public function setImage($args)
    {
        $query = "UPDATE `website_apps` SET `image`= '$args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }
    public function setPlaystore($args)
    {
        $query = "UPDATE `website_apps` SET `playstore_link`= '$args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }
    public function setAppstore($args)
    {
        $query = "UPDATE `website_apps` SET `appstore_link`= '$args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }

    public function getAppshome()
    {
        $query = "SELECT * FROM `website_apps` WHERE 1;";
        $result = $this->conn->query($query);

        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }

}
