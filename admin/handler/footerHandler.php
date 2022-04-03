<?php
include_once($_SERVER["DOCUMENT_ROOT"] . '/admin/controller/footerController.php');

$settingFooter = new footerController;

$setFooter = $settingFooter->getFooter();

foreach($setFooter as $Footer){
    $showFooterContent1 = $Footer['add_1'];
    $showFooterContent2 = $Footer['add_2'];
    $showFooterContent3 = $Footer['add_3'];
    $showFooterContent4 = $Footer['add_4'];

    $showFooterCopyright = $Footer['copyright'];
    $showFooterLogo = $Footer['image'];
}

if(isset($_POST['footer'])){

    $add1 = $_POST['add1'];
    $add2 = $_POST['add2'];
    $add3 = $_POST['add3'];
    $add4 = $_POST['add4'];
    $copyright = $_POST['copyright'];

    $image = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "uploads/" . $image;

    if( !empty($add1) && $showFooterContent1 !== $add1 ){
        $settingFooter->setContent1($add1);
    }

    if( !empty($add2) && $showFooterContent2 !== $add2 ){
        $settingFooter->setContent2($add2);
    }
    if( !empty($add3) && $showFooterContent3 !== $add3 ){
        $settingFooter->setContent3($add3);
    }
    if( !empty($add4) && $showFooterContent4 !== $add4 ){
        $settingFooter->setContent4($add4);
    }

    if( !empty($copyright) && $showFooterCopyright !== $copyright ){
        $settingFooter->setCopyright($copyright);
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
