<?php
include_once($_SERVER["DOCUMENT_ROOT"] . '/courier/admin/controller/calculateController.php');

$settingCalculate = new calculateController;

$setCalculate = $settingCalculate->getCalculate();
foreach($setCalculate as $Calculate){
    $showTitle = $Calculate['title'];
    $showContent = $Calculate['content'];
}

if(isset($_POST['calculate'])){

    $title = $_POST['title'];
    $content = $_POST['content'];
    $image = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "uploads/" . $image;

    if( !empty($title) && $showTitle !== $title){
        $settingCalculate->setTitle($title);
    }

    if( !empty($content) && $showContent !== $content ){
        $settingCalculate->setContent($content);
    }

    if ( !empty($image) ) {
        $checkedImage = $settingCalculate->setImage($image);
        if ($checkedImage) {
            move_uploaded_file($tempname, $folder);
        } else {
            echo "Failed to upload image";
        }
    }


}
