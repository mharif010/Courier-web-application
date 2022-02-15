<?php
include_once($_SERVER["DOCUMENT_ROOT"] . '/courier/admin/controller/footerController.php');

$settingFooter = new footerController;

$setFooter = $settingFooter->getFooter();

foreach($setFooter as $Footer){
    $showFooterContent = $Footer['content'];
    $showFooterLogo = $Footer['image'];
}

if(isset($_POST['footer'])){

    $content = $_POST['content'];

    $image = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "uploads/" . $image;

    if( !empty($content) && $showFooterContent !== $content ){
        $settingFooter->setContent($content);
    }

    if ( !empty($image) ) {
        $checkedImage = $settingFooter->setImage($image);
        if ($checkedImage) {
            move_uploaded_file($tempname, $folder);
        } else {
            echo "Failed to upload image";
        }
    }


}
