<?php
include_once($_SERVER["DOCUMENT_ROOT"] . '/courier/admin/controller/bannerController.php');

$bannerSetting = new BannerController;

$setBanner = $bannerSetting->getBanner();
foreach( $setBanner as $banner ){
    $showIcon     = $banner['banner_icon'];
    $showLinkTxt1 = $banner['banner_lt1'];
    $showLinkUrl1 = $banner['banner_lu1'];
    $showLinkTxt2 = $banner['banner_lt2'];
    $showLinkUrl2 = $banner['banner_lu2'];
    $showLinkTxt3 = $banner['banner_lt3'];
    $showLinkUrl3 = $banner['banner_lu3'];
    $showHeading  = $banner['banner_heading'];
    $showBtnTxt   = $banner['banner_btn'];
    $showBtnLink  = $banner['banner_btnUrl'];
    $showBg       = $banner['banner_bg'];
}

if( isset($_POST['site_banner']) ){

    $banner_icon = $_FILES['banner_icon']['name'];
    $tempname = $_FILES['banner_icon']['tmp_name'];
    $folder = "uploads/" . $banner_icon;

    $banner_lt1 = $_POST['banner_lt1'];
    $banner_lu1 = $_POST['banner_lu1'];
    $banner_lt2 = $_POST['banner_lt2'];
    $banner_lu2 = $_POST['banner_lu2'];
    $banner_lt3 = $_POST['banner_lt3'];
    $banner_lu3 = $_POST['banner_lu3'];

    $banner_heading = $_POST['banner_heading'];

    $banner_btn = $_POST['banner_btn'];
    $banner_btnUrl = $_POST['banner_btnUrl'];

    $banner_bg = $_FILES['banner_bg']['name'];
    $tempname2 = $_FILES['banner_bg']['tmp_name'];
    $folder2 = "uploads/" . $banner_bg;


    

    if ( !empty($banner_icon) ) {
        $checkedtopbg = $bannerSetting->setIcon($banner_icon);
        if ($checkedtopbg) {
            move_uploaded_file($tempname, $folder);
        } else {
            echo "Failed to upload image";
        }
    }

    if (!empty($banner_lt1) && $showLinkTxt1 !== $banner_lt1) {
        $bannerSetting->setBanner_lt1($banner_lt1);
    }
    if (!empty($banner_lu1) && $showLinkUrl1 !== $banner_lu1) {
        $bannerSetting->setBanner_lu1($banner_lu1);
    }
    if (!empty($banner_lt2) && $showLinkTxt2 !== $banner_lt2) {
        $bannerSetting->setBanner_lt2($banner_lt2);
    }
    if (!empty($banner_lu2) && $showLinkUrl2 !== $banner_lu2) {
        $bannerSetting->setBanner_lu2($banner_lu2);
    }
    if (!empty($banner_lt3) && $showLinkTxt3 !== $banner_lt3) {
        $bannerSetting->setBanner_lt3($banner_lt3);
    }
    if (!empty($banner_lu3) && $showLinkUrl3 !== $banner_lu3) {
        $bannerSetting->setBanner_lu3($banner_lu3);
    }

    if (!empty($banner_heading) && $showHeading !== $banner_heading) {
        $bannerSetting->setBanner_heading($banner_heading);
    }
    if (!empty($banner_btn) && $showBtnTxt !== $banner_btn) {
        $bannerSetting->setBanner_btn($banner_btn);
    }
    if (!empty($banner_btnUrl) && $showBtnLink !== $banner_btnUrl) {
        $bannerSetting->setBanner_btnUrl($banner_btn);
    }

    if ( !empty($banner_bg) ) {
        $checkedbanner = $bannerSetting->setBannerBg($banner_bg);
        if ($checkedbanner) {
            move_uploaded_file($tempname2, $folder2);
        } else {
            echo "Failed to upload image";
        }
    }
    

}


