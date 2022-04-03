<?php
class footerController
{
    public function __construct()
    {
        $db = new dbConnection;
        $this->conn = $db->conn;
    }

    public function setContent1($args)
    {
        $query = "UPDATE `website_footer` SET `add_1`= '$args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }
    public function setContent2($args)
    {
        $query = "UPDATE `website_footer` SET `add_2`= '$args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }
    public function setContent3($args)
    {
        $query = "UPDATE `website_footer` SET `add_3`= '$args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }
    public function setContent4($args)
    {
        $query = "UPDATE `website_footer` SET `add_4`= '$args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }

    public function setImage($args)
    {
        $query = "UPDATE `website_footer` SET `image`= '$args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }
    public function setCopyright($args)
    {
        $query = "UPDATE `website_footer` SET `copyright`= '$args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }

    public function getFooter()
    {
        $query = "SELECT * FROM `website_footer` WHERE 1;";
        $result = $this->conn->query($query);

        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }

}
