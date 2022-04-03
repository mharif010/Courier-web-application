<?php
include_once($_SERVER["DOCUMENT_ROOT"] . '/admin/controller/stepsOneController.php');

$settingStepsone = new stepsOneController;

$setStepsone = $settingStepsone->getStepsone();

foreach($setStepsone as $Stepsone){
    $showContent = $Stepsone['content'];
    $showStepsImg = $Stepsone['image'];
    $showStepsbgImg = $Stepsone['bg_image'];
}

if(isset($_POST['steps_one'])){

    $content = $_POST['content'];

    $image = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "uploads/" . $image;

    $bg_image = $_FILES["bg_image"]["name"];
    $tempname_bg = $_FILES["bg_image"]["tmp_name"];
    $folder_bg = "uploads/" . $bg_image;

    if( !empty($content) && $showContent !== $content ){
        $settingStepsone->setContent($content);
    }

    if ( !empty($image) ) {
        $checkedImage = $settingStepsone->setImage($image);
        if ($checkedImage) {
            move_uploaded_file($tempname, $folder);
        } else {
            echo "Failed to upload image";
        }
    }

    if ( !empty($bg_image) ) {
        $checkedBgImage = $settingStepsone->setBgImage($bg_image);
        if ($checkedBgImage) {
            move_uploaded_file($tempname_bg, $folder_bg);
        } else {
            echo "Failed to upload image";
        }
    }


}
