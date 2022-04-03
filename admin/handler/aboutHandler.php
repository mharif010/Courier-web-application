<?php
include_once($_SERVER["DOCUMENT_ROOT"] . '/admin/controller/aboutController.php');

$settingAbout = new AboutController;

$setAbout = $settingAbout->getAbout();
foreach($setAbout as $about){
    $showTitle = $about['title'];
    $showSubTitle = $about['subtitle'];
    $showContent = $about['content'];
    $showContent1 = $about['content1'];
    $showContent2 = $about['content2'];
    $showContent3 = $about['content3'];
}

if(isset($_POST['about_page'])){

    $title = $_POST['title'];
    $subtitle = $_POST['subtitle'];
    $content = $_POST['content'];
    $content1 = $_POST['content1'];
    $content2 = $_POST['content2'];
    $content3 = $_POST['content3'];
    $image = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "uploads/" . $image;

    if( !empty($title) && $showTitle !== $title){
        $settingAbout->setTitle($title);
    }

    if( !empty($subtitle) && $showSubTitle !== $subtitle){
        $settingAbout->setSubTitle($subtitle);
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

    if( !empty($content1) && $showContent1 !== $content1 ){
        $settingAbout->setContent1($content1);
    }
    if( !empty($content2) && $showContent2 !== $content2 ){
        $settingAbout->setContent2($content2);
    }
    if( !empty($content3) && $showContent3 !== $content3 ){
        $settingAbout->setContent3($content3);
    }


}
