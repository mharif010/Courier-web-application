<?php
class homeContactController
{
    public function __construct()
    {
        $db = new dbConnection;
        $this->conn = $db->conn;
    }

    public function setContent($args)
    {
        $query = "UPDATE `website_homecontact` SET `content`= '$args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }

    public function setImage($args)
    {
        $query = "UPDATE `website_homecontact` SET `image`= '$args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }

    public function getContacthome()
    {
        $query = "SELECT * FROM `website_homecontact` WHERE 1;";
        $result = $this->conn->query($query);

        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }

}
