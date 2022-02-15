<?php
include_once($_SERVER["DOCUMENT_ROOT"] . '/courier/admin/controller/bannerController.php');
include_once($_SERVER["DOCUMENT_ROOT"] . '/courier/admin/controller/homeAboutController.php');
include_once($_SERVER["DOCUMENT_ROOT"] . '/courier/admin/controller/calculateController.php');
include_once($_SERVER["DOCUMENT_ROOT"] . '/courier/admin/controller/stepsOneController.php');
include_once($_SERVER["DOCUMENT_ROOT"] . '/courier/admin/controller/deliveryController.php');
include_once($_SERVER["DOCUMENT_ROOT"] . '/courier/admin/controller/pricingController.php');
include_once($_SERVER["DOCUMENT_ROOT"] . '/courier/admin/controller/testimonialController.php');

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

$settingAbout = new homeAboutController;
$setAbout = $settingAbout->getAbouthome();

foreach($setAbout as $about){
    $showTitle = $about['title'];
    $showContent = $about['content'];
    $showImage   = $about['image'];
}

$settingCalculate = new calculateController;
$setCalculate = $settingCalculate->getCalculate();

foreach($setCalculate as $Calculate){
    $showCalTitle = $Calculate['title'];
    $showCalContent = $Calculate['content'];
    $showCalImage   = $Calculate['image'];
}

$settingStepsone = new stepsOneController;
$setStepsone = $settingStepsone->getStepsone();

foreach($setStepsone as $Stepsone){
    $showStepsContent = $Stepsone['content'];
    $showStepsImg = $Stepsone['image'];
    $showStepsbgImg = $Stepsone['bg_image'];
}


$settingDelivery = new deliveryController;
$setDelivery = $settingDelivery->getDelivery();

foreach($setDelivery as $Delivery){
    $showDelContent = $Delivery['content'];
    $showDelImage   = $Delivery['image'];
}

$settingTestimonial = new testimonialController;

$setTestimonial = $settingTestimonial->getTestimonial();

foreach($setTestimonial as $Testimonial){
    
     $showTesBg     = $Testimonial['bg_image'];
     $showTesImage  = $Testimonial['image'];
     $showTesDesc   = $Testimonial['description'];
     $showTesName   = $Testimonial['name'];
     $showTesImage2  = $Testimonial['image_2'];
     $showTesDesc2  = $Testimonial['description_2'];
     $showTesName2  = $Testimonial['name_2'];
     $showTesImage3  = $Testimonial['image_3'];
     $showTesDesc3  = $Testimonial['description_3'];
     $showTesName3  = $Testimonial['name_3'];

}

$settingPricing = new pricingController;
$setPricing = $settingPricing->getPricing();

foreach($setPricing as $Pricing){
    $showPriceTitle = $Pricing['title'];
    $showPriceSubTitle = $Pricing['sub_title'];
    $showPriceContent1 = $Pricing['content_one'];
    $showPriceContent2 = $Pricing['content_two'];
    $showPriceContent3 = $Pricing['content_three'];
}

include_once($_SERVER["DOCUMENT_ROOT"] . '/courier/admin/controller/stepsTwoController.php');

$settingStepstwo = new stepsTwoController;
$setStepstwo = $settingStepstwo->getStepstwo();

foreach($setStepstwo as $Stepstwo){
    $showContent2 = $Stepstwo['content'];
    $showStepsImg2 = $Stepstwo['image'];
    $showStepsbgImg2 = $Stepstwo['bg_image'];
}

include_once($_SERVER["DOCUMENT_ROOT"] . '/courier/admin/controller/homeContactController.php');

$settingContacthome = new homeContactController;
$setContacthome = $settingContacthome->getContacthome();

foreach($setContacthome as $Contacthome){
    $showHomecontactContent = $Contacthome['content'];
    $showHomecontactImage   = $Contacthome['image'];
}