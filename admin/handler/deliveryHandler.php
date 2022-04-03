<?php
include_once($_SERVER["DOCUMENT_ROOT"] . '/admin/controller/deliveryController.php');

$settingDelivery = new deliveryController;

$setDelivery = $settingDelivery->getDelivery();

foreach($setDelivery as $Delivery){
    $showDelContent = $Delivery['content'];
}

if(isset($_POST['delivery'])){

    $content = $_POST['content'];

    $image = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "uploads/" . $image;

    if( !empty($content) && $showDelContent !== $content ){
        $settingDelivery->setContent($content);
    }

    if ( !empty($image) ) {
        $checkedImage = $settingDelivery->setImage($image);
        if ($checkedImage) {
            move_uploaded_file($tempname, $folder);
        } else {
            echo "Failed to upload image";
        }
    }


}
