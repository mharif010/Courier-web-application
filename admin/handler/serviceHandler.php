<?php
include_once($_SERVER["DOCUMENT_ROOT"] . '/admin/controller/serviceController.php');
$setService = new serviceController;


if(isset($_POST['add_service'])){

    $title = $_POST['title'];
    $content = $_POST['content'];
    $image = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "uploads/" . $image;

    if( !empty($title) && !empty($content) ){
        $setService->setServiceContent($title, $content);
    }

    if ( !empty($image) && !empty($title) ) {
        $checkedImage = $setService->setServiceImage($image,$title);
        if ($checkedImage) {
            move_uploaded_file($tempname, $folder);
        } else {
            echo "Failed to upload image";
        }
    }


}