<?php
include_once($_SERVER["DOCUMENT_ROOT"] . '/admin/controller/privacyController.php');

$settingPrivacy = new PrivacyController;

$setprivacy = $settingPrivacy->getPrivacy();
foreach($setprivacy as $privacy){
    $showTitle = $privacy['title'];
    $showSubTitle = $privacy['subtitle'];
    $showContent = $privacy['content'];
}