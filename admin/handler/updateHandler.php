<?php
include_once($_SERVER["DOCUMENT_ROOT"] . '/admin/controller/serviceController.php');

$settingUpdate = new serviceController;
$newId = $_GET['id'];
$setData = $settingUpdate->updategetService($newId);
foreach($setData as $data){
    $showTitle = $data['title'];
    $showContent = $data['content'];
}

if(isset($_POST['update_service'])){

    $title = $_POST['title'];
    $content = $_POST['content'];
    $image = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "uploads/" . $image;

    if( !empty($title) && $showTitle !== $title){
        $settingUpdate->updateTitle($title,$newId);
    }

    if( !empty($content) && $showContent !== $content ){
        $settingUpdate->updateContent($content,$newId);
    }

    if ( !empty($image) ) {
        $checkedImage = $settingUpdate->updateImage($image,$newId);
        if ($checkedImage) {
            move_uploaded_file($tempname, $folder);
        } else {
            echo "Failed to upload image";
        }
    }


}
