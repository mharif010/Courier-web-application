<?php
class calculateController
{
    public function __construct()
    {
        $db = new dbConnection;
        $this->conn = $db->conn;
    }

    public function setTitle($args)
    {
        $query = "UPDATE `website_calculate` SET `title`= '$args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }

    public function setList1($args)
    {
        $query = "UPDATE `website_calculate` SET `list_1`= '$args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }

    public function setList2($args)
    {
        $query = "UPDATE `website_calculate` SET `list_2`= '$args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }

    public function setList3($args)
    {
        $query = "UPDATE `website_calculate` SET `list_3`= '$args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }
    public function setList4($args)
    {
        $query = "UPDATE `website_calculate` SET `list_4`= '$args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }

    // public function setContent($args)
    // {
    //     $query = "UPDATE `website_calculate` SET `content`= '$args' WHERE 1";
    //     $result = $this->conn->query($query);
    //     return $result;
    // }

    public function setImage($args)
    {
        $query = "UPDATE `website_calculate` SET `image`= '$args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }

    public function getCalculate()
    {
        $query = "SELECT * FROM `website_calculate`";
        $result = $this->conn->query($query);

        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }

}
