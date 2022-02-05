<?php

include('controller/settingController.php');

if (isset($_POST['website_settings'])) {

    $title = $_POST['title'];
    $tagline = $_POST['tagline'];
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];    
    $folder = "uploads/".$filename;
            
    $uploads = new LogoController();
    $checkedUpload = $uploads->upload( $title,$tagline,$filename );
    if( $checkedUpload ){
        move_uploaded_file($tempname, $folder);
    }
    else{
        echo "Failed to upload image";
    }
}