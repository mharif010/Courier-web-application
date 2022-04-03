<?php
include_once($_SERVER["DOCUMENT_ROOT"] . '/admin/controller/homeContactController.php');

$settingContacthome = new homeContactController;

$setContacthome = $settingContacthome->getContacthome();

foreach($setContacthome as $Contacthome){
    $showHomecontactContent = $Contacthome['content'];
}

if(isset($_POST['Contacthome'])){

    $content = $_POST['content'];

    $image = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "uploads/" . $image;

    if( !empty($content) && $showHomecontactContent !== $content ){
        $settingContacthome->setContent($content);
    }

    if ( !empty($image) ) {
        $checkedImage = $settingContacthome->setImage($image);
        if ($checkedImage) {
            move_uploaded_file($tempname, $folder);
        } else {
            echo "Failed to upload image";
        }
    }


}
