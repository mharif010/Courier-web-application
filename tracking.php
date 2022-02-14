<?php 
require_once('header.php'); ?>
<!-- Content Wrapper -->
    <article> 
        <!-- Breadcrumb -->
        <section class="theme-breadcrumb pad-50">                
            <div class="theme-container container ">  
                <div class="row">
                    <div class="col-sm-8 pull-left">
                        <div class="title-wrap">
                            <h2 class="section-title no-margin"> product tracking </h2>
                            <p class="fs-16 no-margin"> Track your product & see the current condition </p>
                        </div>
                    </div>
                    <div class="col-sm-4">                        
                        <ol class="breadcrumb-menubar list-inline">
                            <li><a href="#" class="gray-clr">Home</a></li>                                   
                            <li class="active">Track</li>
                        </ol>
                    </div>  
                </div>
            </div>
        </section>
        <!-- /.Breadcrumb -->

        <!-- Tracking -->
        <section class="pt-50 pb-120 tracking-wrap">    
            <div class="theme-container container ">  
                <div class="row pad-10">
                    <div class="col-md-8 col-md-offset-2 tracking-form wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">     
                        <h2 class="title-1"> track your product </h2> <span class="font2-light fs-12">Now you can track your product easily</span>
                        <div class="row">
                            <form class="">
                                <div class="col-md-7 col-sm-7">
                                    <div class="form-group">
                                        <input type="text" placeholder="Enter your product ID" required="" class="form-control box-shadow">
                                    </div>
                                </div>
                                <div class="col-md-5 col-sm-5">
                                    <div class="form-group">
                                        <button class="btn-1">track your product</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>    
                </div>
                <div class="row">
                    <div class="col-md-7 pad-30 wow fadeInLeft" data-wow-offset="50" data-wow-delay=".30s"> 
                        <img alt="" src="assets/img/block/product-1.jpg" />
                    </div>
                    <div class="col-md-5 pad-30 wow fadeInRight" data-wow-offset="50" data-wow-delay=".30s"> 
                        <div class="prod-info white-clr">
                            <ul>
                                <li> <span class="title-2">Product Name:</span> <span class="fs-16">iPhone 6 Boxed</span> </li>
                                <li> <span class="title-2">Product id:</span> <span class="fs-16">9034215</span> </li>
                                <li> <span class="title-2">order date:</span> <span class="fs-16">21st Feb, 2016</span> </li>
                                <li> <span class="title-2">order status:</span> <span class="fs-16 theme-clr">On Process</span> </li>
                                <li> <span class="title-2">weight (kg):</span> <span class="fs-16">0.85 KG</span> </li>
                                <li> <span class="title-2">order type:</span> <span class="fs-16">Basic ($50)</span> </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="progress-wrap">
                    <div class="progress-status">
                        <span class="border-left"></span>
                        <span class="border-right"></span>
                        <span class="dot dot-left wow fadeIn" data-wow-offset="50" data-wow-delay=".40s"></span>
                        <span class="themeclr-border wow fadeIn" data-wow-offset="50" data-wow-delay=".50s">  <span class="dot dot-center theme-clr-bg"></span> </span>
                        <span class="dot dot-right wow fadeIn" data-wow-offset="50" data-wow-delay=".60s"></span>
                    </div>
                    <div class="row progress-content upper-text">
                        <div class="col-md-3 col-xs-8 col-sm-2">
                            <p class="fs-12 no-margin"> FROM </p>
                            <h2 class="title-1 no-margin">London</h2>
                        </div>
                        <div class="col-md-2 col-xs-8 col-sm-3">
                            <p class="fs-12 no-margin"> [ <b class="black-clr">6 DAYS </b> ] </p>                                
                        </div>
                        <div class="col-md-4 col-xs-8 col-sm-4 text-center">
                            <p class="fs-12 no-margin"> currently in </p>
                            <h2 class="title-1 no-margin">singapore</h2>
                        </div>
                        <div class="col-md-1 col-xs-8 col-sm-1 no-pad">
                            <p class="fs-12 no-margin"> [ <b class="black-clr">2 DAYS </b> ] </p>                                
                        </div>
                        <div class="col-md-2 col-xs-8 col-sm-2 text-right">
                            <p class="fs-12 no-margin"> to </p>
                            <h2 class="title-1 no-margin">dhaka</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.Tracking -->

    </article>
<!-- /.Content Wrapper -->


<?php 
require_once('footer.php');