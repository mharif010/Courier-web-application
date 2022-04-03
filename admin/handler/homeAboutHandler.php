<?php
include_once($_SERVER["DOCUMENT_ROOT"] . '/admin/controller/homeAboutController.php');

$settingAbout = new homeAboutController;

$setAbout = $settingAbout->getAbouthome();
foreach($setAbout as $about){
    $showTitle = $about['title'];
    $showContent = $about['content'];
}

if(isset($_POST['about_home'])){

    $title = $_POST['title'];
    $content = $_POST['content'];
    $image = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "uploads/" . $image;

    if( !empty($title) && $showTitle !== $title){
        $settingAbout->setTitle($title);
    }

    if( !empty($content) && $showContent !== $content ){
        $settingAbout->setContent($content);
    }

    if ( !empty($image) ) {
        $checkedImage = $settingAbout->setImage($image);
        if ($checkedImage) {
            move_uploaded_file($tempname, $folder);
        } else {
            echo "Failed to upload image";
        }
    }


}
