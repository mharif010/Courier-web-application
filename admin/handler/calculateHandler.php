<?php
include_once($_SERVER["DOCUMENT_ROOT"] . '/admin/controller/calculateController.php');

$settingCalculate = new calculateController;

$setCalculate = $settingCalculate->getCalculate();
foreach($setCalculate as $Calculate){

    $showTitle = $Calculate['title'];

    $showList1 = $Calculate['list_1'];
    $showList2 = $Calculate['list_2'];
    $showList3 = $Calculate['list_3'];
    $showList4 = $Calculate['list_4'];   

}

if(isset($_POST['calculate'])){

    $title = $_POST['title'];
    $list1 = $_POST['list1'];
    $list2 = $_POST['list2'];
    $list3 = $_POST['list3'];
    $list4 = $_POST['list4'];
    $image = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "uploads/" . $image;

    if( !empty($title) && $showTitle !== $title){
        $settingCalculate->setTitle($title);
    }
    
    if( !empty($list1) && $showList1 !== $list1 ){
        $settingCalculate->setList1($list1);
    }

    if( !empty($list2) && $showList2 !== $list2 ){
        $settingCalculate->setList2($list2);
    }
    if( !empty($list3) && $showList3 !== $list3 ){
        $settingCalculate->setList3($list3);
    }
    if( !empty($list4) && $showList4 !== $list4 ){
        $settingCalculate->setList4($list4);
    }

    if ( !empty($image) ) {
        $checkedImage = $settingCalculate->setImage($image);
        if ($checkedImage) {
            move_uploaded_file($tempname, $folder);
        } else {
            echo "Failed to upload image";
        }
    }


}
