<?php
include_once($_SERVER["DOCUMENT_ROOT"] . '/admin/controller/privacyController.php');

$settingPrivacy = new PrivacyController;

$setprivacy = $settingPrivacy->getPrivacy();
foreach($setprivacy as $privacy){
    $showTitle = $privacy['title'];
    $showSubTitle = $privacy['subtitle'];
    $showContent = $privacy['content'];
}

if(isset($_POST['privacy_page'])){

    $title = $_POST['title'];
    $subtitle = $_POST['subtitle'];
    $content = $_POST['content'];
    
    if( !empty($title) && $showTitle !== $title){
        $settingPrivacy->setTitle($title);
    }

    if( !empty($subtitle) && $showSubTitle !== $subtitle){
        $settingPrivacy->setSubTitle($subtitle);
    }

    if( !empty($content) && $showContent !== $content ){
        $settingPrivacy->setContent($content);
    }

}
