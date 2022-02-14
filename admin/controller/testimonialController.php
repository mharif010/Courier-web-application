<?php
class testimonialController
{
    public function __construct()
    {
        $db = new dbConnection;
        $this->conn = $db->conn;
    }

    public function setBgImage($args)
    {
        $query = "UPDATE `website_testimonial` SET `bg_image`= '$args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }

    public function setImage($args)
    {
        $query = "UPDATE `website_testimonial` SET `image`= '$args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }

    public function setDesc($args)
    {
        $query = "UPDATE `website_testimonial` SET `description`= '$args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }
    public function setName($args)
    {
        $query = "UPDATE `website_testimonial` SET `name`= '$args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }

    public function setImage2($args)
    {
        $query = "UPDATE `website_testimonial` SET `image_2`= '$args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }

    public function setDesc2($args)
    {
        $query = "UPDATE `website_testimonial` SET `description_2`= '$args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }
    public function setName2($args)
    {
        $query = "UPDATE `website_testimonial` SET `name_2`= '$args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }

    public function setImage3($args)
    {
        $query = "UPDATE `website_testimonial` SET `image_3`= '$args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }

    public function setDesc3($args)
    {
        $query = "UPDATE `website_testimonial` SET `description_3`= '$args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }
    public function setName3($args)
    {
        $query = "UPDATE `website_testimonial` SET `name_3`= '$args' WHERE 1";
        $result = $this->conn->query($query);
        return $result;
    }

    public function getTestimonial()
    {
        $query = "SELECT * FROM `website_testimonial` WHERE 1;";
        $result = $this->conn->query($query);

        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }

}
