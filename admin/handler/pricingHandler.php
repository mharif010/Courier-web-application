<?php
include_once($_SERVER["DOCUMENT_ROOT"] . '/courier/admin/controller/pricingController.php');

$settingPricing = new pricingController;

$setPricing = $settingPricing->getPricing();

foreach($setPricing as $Pricing){
    $showPriceTitle = $Pricing['title'];
    $showPriceSubTitle = $Pricing['sub_title'];
    $showPriceContent1 = $Pricing['content_one'];
    $showPriceContent2 = $Pricing['content_two'];
    $showPriceContent3 = $Pricing['content_three'];
}

if(isset($_POST['pricing_btn'])){

    $title = $_POST['title'];
    $subtitle = $_POST['sub_title'];
    $contentOne = $_POST['contentOne'];
    $contentTwo = $_POST['contentTwo'];
    $contentThree = $_POST['contentThree'];

    if( !empty($title) && $showPriceTitle !== $title ){
        $settingPricing->setTitle($title);
    }

    if( !empty($subtitle) && $showPriceSubTitle !== $subtitle ){
        $settingPricing->setSubTitle($subtitle);
    }
    
    if( !empty($contentOne) && $showPriceContent1 !== $contentOne ){
        $settingPricing->setContent($contentOne);
    }

    if( !empty($contentTwo) && $showPriceContent2 !== $contentTwo ){
        $settingPricing->setContent2($contentTwo);
    }

    if( !empty($contentThree) && $showPriceContent3 !== $contentThree ){
        $settingPricing->setContent3($contentThree);
    }

}
