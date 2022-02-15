<?php
class serviceController
{

    public function __construct()
    {
        $db = new dbConnection;
        $this->conn = $db->conn;
    }

    public function setServiceContent( $title, $content )
    {
        $query = "INSERT INTO `website_services`(`title`, `content`) VALUES ('$title', '$content');";
        $result = $this->conn->query($query);
        return $result;
    }

    public function setServiceImage( $image, $title )
    {
        $query = "UPDATE `website_services` SET `image`= ('$image') WHERE `title` = ('$title');";
        $result = $this->conn->query($query);
        return $result;
    }

    public function getService()
    {
        $query = "SELECT * FROM `website_services` WHERE 1;";
        $result = $this->conn->query($query);

        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function updategetService($id)
    {
        $query = "SELECT * FROM `website_services` WHERE `id` = ($id);";
        $result = $this->conn->query($query);

        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function updateTitle($title, $id)
    {
        $query = "UPDATE `website_services` SET `title`= ('$title') WHERE `id` = ($id);";
        $result = $this->conn->query($query);
        return $result;
    }

    public function updateContent($content, $id)
    {
        $query = "UPDATE `website_services` SET `content`= ('$content') WHERE `id` = ($id);";
        $result = $this->conn->query($query);
        return $result;
    }

    public function updateImage($image, $id)
    {
        $query = "UPDATE `website_services` SET `image`= ('$image') WHERE `id` = ($id);";
        $result = $this->conn->query($query);
        return $result;
    }

    public function deleteService($id){
        $query = "DELETE FROM `website_services` WHERE `id` = ($id);";
        $result = $this->conn->query($query);
        return $result;
    }

}