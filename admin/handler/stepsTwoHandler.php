<?php
include_once($_SERVER["DOCUMENT_ROOT"] . '/courier/admin/controller/stepsTwoController.php');

$settingStepstwo = new stepsTwoController;

$setStepstwo = $settingStepstwo->getStepstwo();

foreach($setStepstwo as $Stepstwo){
    $showContent2 = $Stepstwo['content'];
}

if(isset($_POST['steps_two'])){

    $content = $_POST['content'];

    $image = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "uploads/" . $image;

    $bg_image = $_FILES["bg_image"]["name"];
    $tempname_bg = $_FILES["bg_image"]["tmp_name"];
    $folder_bg = "uploads/" . $bg_image;

    if( !empty($content) && $showContent2 !== $content ){
        $settingStepstwo->setContent($content);
    }

    if ( !empty($image) ) {
        $checkedImage = $settingStepstwo->setImage($image);
        if ($checkedImage) {
            move_uploaded_file($tempname, $folder);
        } else {
            echo "Failed to upload image";
        }
    }

    if ( !empty($bg_image) ) {
        $checkedBgImage = $settingStepstwo->setBgImage($bg_image);
        if ($checkedBgImage) {
            move_uploaded_file($tempname_bg, $folder_bg);
        } else {
            echo "Failed to upload image";
        }
    }


}
