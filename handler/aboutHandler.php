<?php
include_once($_SERVER["DOCUMENT_ROOT"] . '/admin/controller/aboutController.php');

$settingAbout = new AboutController;

$setAbout = $settingAbout->getAbout();
foreach($setAbout as $about){
    $showTitle = $about['title'];
    $showSubTitle = $about['subtitle'];
    $showContent = $about['content'];
    $showImage   = $about['image'];
    $showContent1 = $about['content1'];
    $showContent2 = $about['content2'];
    $showContent3 = $about['content3'];
}