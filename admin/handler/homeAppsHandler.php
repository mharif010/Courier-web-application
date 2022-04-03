<?php
include_once($_SERVER["DOCUMENT_ROOT"] . '/admin/controller/homeAppsController.php');

$settingApps = new homeAppsController;

$setAbout = $settingApps->getAppshome();
foreach($setAbout as $about){
    $showAppsSubTitle = $about['subtitle'];
    $showAppsTitle = $about['title'];
    $showAppsContent = $about['content'];
    $showAppsContent1 = $about['content1'];
    $showAppsContent2 = $about['content2'];
    $showAppsPlaystore = $about['playstore_link'];
    $showAppsAppstore = $about['appstore_link'];
}

if(isset($_POST['apps_home'])){

    $subtitle = $_POST['subtitle'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $content1 = $_POST['content1'];
    $content2 = $_POST['content2'];
    $image = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "uploads/" . $image;

    $play_link = $_POST['play_link'];
    $store_link = $_POST['store_link'];

    if( !empty($subtitle) && $showAppsSubTitle !== $subtitle){
        $settingApps->setSubTitle($subtitle);
    }

    if( !empty($title) && $showAppsTitle !== $title){
        $settingApps->setTitle($title);
    }

    if( !empty($content) && $showAppsContent !== $content ){
        $settingApps->setContent($content);
    }

    if( !empty($content1) && $showAppsContent1 !== $content1 ){
        $settingApps->setContent1($content1);
    }
    if( !empty($content2) && $showAppsContent2 !== $content2 ){
        $settingApps->setContent2($content2);
    }

    if( !empty($play_link) && $showAppsPlaystore !== $play_link){
        $settingApps->setPlaystore($play_link);
    }
    if( !empty($store_link) && $showAppsAppstore !== $store_link){
        $settingApps->setAppstore($store_link);
    }

    if ( !empty($image) ) {
        $checkedImage = $settingApps->setImage($image);
        if ($checkedImage) {
            move_uploaded_file($tempname, $folder);
        } else {
            echo "Failed to upload image";
        }
    }


}
