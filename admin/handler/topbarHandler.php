<?php
include_once($_SERVER["DOCUMENT_ROOT"] . '/courier/admin/controller/topbarController.php');

$topbarSetting = new topbarController;

//$setphone = $topbarSetting->getPhone();
//$settopbg = $topbarSetting->getTopbg();

// foreach ($setphone as $phone) {
//     $showPhone = $phone['site_phone'];
// }
// foreach ($settopbg as $topBg) {
//     $showTopBg = $topBg['site_bg'];
// }

if (isset($_POST['site_topbar'])) {

    $topbar_phone = $_POST['topbar_phone'];
    $topbar_bg = $_FILES["topbar_bg"]["name"];
    $tempname = $_FILES["topbar_bg"]["tmp_name"];
    $folder = "uploads/" . $topbar_bg;

    if (!empty($topbar_phone)) {
        $topbarSetting->setPhone($topbar_phone);
    }

    if (!empty($topbar_bg)) {
        $checkedtopbg = $topbarSetting->setTopbg($topbar_bg);
        if ($checkedtopbg) {
            move_uploaded_file($tempname, $folder);
        } else {
            echo "Failed to upload image";
        }
    }
}
