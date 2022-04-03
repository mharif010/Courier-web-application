<?php
class PrivacyController
{
    public function __construct()
    {
        $db = new dbConnection;
        $this->conn = $db->conn;
    }

    public function setTitle($args)
    {
        $query = "UPDATE `website_privacy` SET `title`= '$args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }

    public function setSubTitle($args)
    {
        $query = "UPDATE `website_privacy` SET `subtitle`= '$args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }

    public function setContent($args)
    {
        $query = "UPDATE `website_privacy` SET `content`= '$args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }

    public function getPrivacy()
    {
        $query = "SELECT * FROM `website_privacy` WHERE 1;";
        $result = $this->conn->query($query);

        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }

}
