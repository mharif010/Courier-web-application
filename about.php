<?php 
require_once('header.php'); 
include_once($_SERVER["DOCUMENT_ROOT"] . '/handler/aboutHandler.php');
?>

 <!-- Content Wrapper -->
    <article class="about-page"> 
        <!-- Breadcrumb -->
        <section class="theme-breadcrumb pad-50">                
            <div class="theme-container container ">  
                <div class="row">
                    <div class="col-sm-8 pull-left">
                        <div class="title-wrap">
                            <h2 class="section-title no-margin"><?php echo $showTitle; ?></h2>
                            <p class="fs-16 no-margin"><?php echo $showSubTitle; ?></p>
                        </div>
                    </div>
                    <div class="col-sm-4">                        
                        <ol class="breadcrumb-menubar list-inline">
                            <li><a href="#" class="gray-clr">Home</a></li>                                   
                            <li class="active">About</li>
                        </ol>
                    </div>  
                </div>
            </div>
        </section>
        <!-- /.Breadcrumb -->

        <!-- About Us -->
        <section class="pad-50 about-wrap">
            <span class="bg-text"> <?php echo $showTitle; ?> </span>
            <div class="theme-container container">               
                <div class="row">
                    <div class="col-md-6">
                        <div class="about-us pt-10">
                            <?php echo $showContent; ?>
                        </div>
                    </div>
                    <div class="col-md-6 text-center">                                
                        <img alt="" src="admin/uploads/<?php echo $showImage; ?>" class="effect animated fadeInRight" />
                    </div>
                </div>
            </div>
        </section>
        <!-- /.About Us -->

        <!-- More About Us -->
        <section class="pad-30 more-about-wrap">
            <div class="theme-container container pb-100">               
                <div class="row">
                    <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                        <div class="more-about clrbg-before">
                            <?php echo $showContent1; ?>
                            <!-- <h2 class="title-1">what we do</h2>
                            <div class="pad-10"></div>
                            <p>Lorem ipsum dolor sit amet, consectetuer 
                                adipiscing elit, sed diam nonummy nibh eui
                                tincidunt ut laoreet dolore magna aliquam
                                volutpat. Ut wisi enim ad minim veniam, quis 
                                nostrud exerci tation ullamcorper suscipit 
                                lobortis nisl ut aliquip ex ea commodo</p> -->
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                        <div class="more-about clrbg-before">
                            <?php echo $showContent2; ?>
                            <!-- <h2 class="title-1">Our History</h2>
                            <div class="pad-10"></div>
                            <p>Lorem ipsum dolor sit amet, consectetuer 
                                adipiscing elit, sed diam nonummy nibh eui
                                tincidunt ut laoreet dolore magna aliquam
                                volutpat. Ut wisi enim ad minim veniam, quis 
                                nostrud exerci tation ullamcorper suscipit 
                                lobortis nisl ut aliquip ex ea commodo</p> -->
                        </div>
                    </div>
                    <div class="col-md-4  col-sm-4 wow fadeInUp" data-wow-offset="50" data-wow-delay=".40s">
                        <div class="more-about clrbg-before">
                            <?php echo $showContent3; ?>
                            <!-- <h2 class="title-1">our mission</h2>
                            <div class="pad-10"></div>
                            <p>Lorem ipsum dolor sit amet, consectetuer 
                                adipiscing elit, sed diam nonummy nibh eui
                                tincidunt ut laoreet dolore magna aliquam
                                volutpat. Ut wisi enim ad minim veniam, quis 
                                nostrud exerci tation ullamcorper suscipit 
                                lobortis nisl ut aliquip ex ea commodo</p> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.More About Us -->
    </article>
<!-- /.Content Wrapper -->


<?php 
require_once('footer.php');