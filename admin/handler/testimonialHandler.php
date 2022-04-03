<?php
include_once($_SERVER["DOCUMENT_ROOT"] . '/admin/controller/testimonialController.php');

$settingTestimonial = new testimonialController;

$setTestimonial = $settingTestimonial->getTestimonial();

foreach($setTestimonial as $Testimonial){
    
     $showTesDesc = $Testimonial['description'];
     $showTesName = $Testimonial['name'];
     $showTesDesc2 = $Testimonial['description_2'];
     $showTesName2 = $Testimonial['name_2'];
     $showTesDesc3 = $Testimonial['description_3'];
     $showTesName3 = $Testimonial['name_3'];

}

if(isset($_POST['testimonial'])){

    $bg_image = $_FILES["bg_image"]["name"];
    $tempname_bg = $_FILES["bg_image"]["tmp_name"];
    $folder_bg = "uploads/" . $bg_image;

    $image = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "uploads/" . $image;
    $description = $_POST['description'];
    $name        = $_POST['name'];

    $image_2 = $_FILES["image_2"]["name"];
    $tempname_2 = $_FILES["image_2"]["tmp_name"];
    $folder_2 = "uploads/" . $image_2;
    $description_2 = $_POST['description_2'];
    $name_2        = $_POST['name_2'];

    $image_3 = $_FILES["image_3"]["name"];
    $tempname_3 = $_FILES["image_3"]["tmp_name"];
    $folder_3 = "uploads/" . $image_3;
    $description_3 = $_POST['description_3'];
    $name_3        = $_POST['name_3'];
    
    if ( !empty($bg_image) ) {
        $checkedBgImage = $settingTestimonial->setBgImage($bg_image);
        if ($checkedBgImage) {
            move_uploaded_file($tempname_bg, $folder_bg);
        } else {
            echo "Failed to upload image";
        }
    }

    if ( !empty($image) ) {
        $checkedImage = $settingTestimonial->setImage($image);
        if ($checkedImage) {
            move_uploaded_file($tempname, $folder);
        } else {
            echo "Failed to upload image";
        }
    }
    if( !empty($description) && $showTesDesc !== $description ){
        $settingTestimonial->setDesc($description);
    }
    if( !empty($name) && $showTesName !== $name ){
        $settingTestimonial->setName($name);
    }

    if ( !empty($image_2) ) {
        $checkedImage2 = $settingTestimonial->setImage2($image_2);
        if ($checkedImage2) {
            move_uploaded_file($tempname_2, $folder_2);
        } else {
            echo "Failed to upload image";
        }
    }
    if( !empty($description_2) && $showTesDesc2 !== $description_2 ){
        $settingTestimonial->setDesc2($description_2);
    }
    if( !empty($name_2) && $showTesName2 !== $name_2 ){
        $settingTestimonial->setName2($name_2);
    }

    if ( !empty($image_3) ) {
        $checkedImage3 = $settingTestimonial->setImage3($image_3);
        if ($checkedImage3) {
            move_uploaded_file($tempname_3, $folder_3);
        } else {
            echo "Failed to upload image";
        }
    }
    if( !empty($description_3) && $showTesDesc3 !== $description_3 ){
        $settingTestimonial->setDesc3($description_3);
    }
    if( !empty($name_3) && $showTesName3 !== $name_3 ){
        $settingTestimonial->setName3($name_3);
    }


}
