<?php
class stepsOneController
{
    public function __construct()
    {
        $db = new dbConnection;
        $this->conn = $db->conn;
    }

    public function setContent($args)
    {
        $query = "UPDATE `website_stepsone` SET `content`= '$args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }

    public function setImage($args)
    {
        $query = "UPDATE `website_stepsone` SET `image`= '$args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }

    public function setBgImage($args)
    {
        $query = "UPDATE `website_stepsone` SET `bg_image`= '$args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }

    public function getStepsone()
    {
        $query = "SELECT * FROM `website_stepsone` WHERE 1;";
        $result = $this->conn->query($query);

        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }

}
