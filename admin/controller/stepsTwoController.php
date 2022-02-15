<?php
class stepsTwoController
{
    public function __construct()
    {
        $db = new dbConnection;
        $this->conn = $db->conn;
    }

    public function setContent($args)
    {
        $query = "UPDATE `website_stepstwo` SET `content`= '$args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }

    public function setImage($args)
    {
        $query = "UPDATE `website_stepstwo` SET `image`= '$args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }

    public function setBgImage($args)
    {
        $query = "UPDATE `website_stepstwo` SET `bg_image`= '$args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }

    public function getStepstwo()
    {
        $query = "SELECT * FROM `website_stepstwo` WHERE 1;";
        $result = $this->conn->query($query);

        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }

}
