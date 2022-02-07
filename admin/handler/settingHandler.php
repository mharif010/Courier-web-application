<?php

include_once($_SERVER["DOCUMENT_ROOT"] . '/courier/admin/controller/settingController.php');

$updateSetting = new SettingController();

$settile = $updateSetting->getTitle();
$settagline = $updateSetting->getTagline();
$logo = $updateSetting->getlogo();

foreach ($settile as $title) {
    $showTitle = $title['website_title'];
}
foreach ($settagline as $tagline) {
    $showTagline = $tagline['website_tagline'];
}

foreach ($logo as $lgo) {
    $showlogo = $lgo['website_logo'];
}


if (isset($_POST['website_settings'])) {

    $title = $_POST['title'];
    $tagline = $_POST['tagline'];
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "uploads/" . $filename;

    if (!empty($filename)) {
        $checkedUpload = $updateSetting->upload($filename);
        if ($checkedUpload) {
            move_uploaded_file($tempname, $folder);
        } else {
            echo "Failed to upload image";
        }
    }

    if (!empty($title)) {
        $updateSetting->settitle($title);
    }

    if (!empty($tagline)) {
        $updateSetting->setTagline($tagline);
    }
}
