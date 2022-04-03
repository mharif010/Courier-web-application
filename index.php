<?php
include('header.php');
include_once($_SERVER["DOCUMENT_ROOT"] . '/handler/homeHandler.php');


?>
<!-- Content Wrapper -->
<article>
    <!-- Banner -->
    <section class="banner mask-overlay pad-120 white-clr" style="background-image: url('admin/uploads/<?php echo $showBg; ?>');">
        <div class="container theme-container rel-div">
            <img class="pt-10 effect animated fadeInLeft" alt="" src="admin/uploads/<?php echo $showIcon; ?>" />
            <ul class="list-items fw-600 effect animated wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                <li><a href="<?php echo $showLinkUrl1; ?>"><?php echo $showLinkTxt1; ?></a></li>
                <li><a href="<?php echo $showLinkUrl2; ?>"><?php echo $showLinkTxt2; ?></a></li>
                <li><a href="<?php echo $showLinkUrl3; ?>"><?php echo $showLinkTxt3; ?></a></li>
            </ul>
            <h2 class="section-title fs-48 effect animated wow fadeInUp" style="margin-bottom:50px" data-wow-offset="50" data-wow-delay=".20s"><?php echo $showHeading; ?> </h2>
            <a href="<?php echo $showBtnLink; ?>" class="btn-1">
                <?php echo $showBtnTxt; ?>
            </a>
        </div>
        <div class="pt-50 visible-lg"></div>
    </section>
    <!-- /.Banner -->

    <!-- Track Product -->
    <section>
        <div class="theme-container container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 track-prod clrbg-before wow slideInUp" data-wow-offset="50" data-wow-delay=".20s">
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
        </div>
    </section>
    <!-- /.Track Product -->

    <!-- About Us -->
    <section class="pad-80 about-wrap clrbg-before">
        <span class="bg-text wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s"> <?php echo $showTitle; ?> </span>
        <div class="theme-container container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about-us">
                        <?php echo $showContent; ?>   
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <div class="pb-80 visible-lg"></div>
                    <img alt="" src="admin/uploads/<?php echo $showImage; ?>" class="wow slideInRight" data-wow-offset="50" data-wow-delay=".20s" />
                </div>
            </div>
        </div>
    </section>
    <!-- /.About Us -->

    <!-- Calculate Your Cost -->
    <section class="calculate pt-100">
        <div class="theme-container container">

            <div class="row">
                <div class="col-md-6 text-center">
                    <img src="admin/uploads/<?php echo $showCalImage; ?>" alt="" class="wow slideInLeft" data-wow-offset="50" data-wow-delay=".20s" />
                </div>
                <div class="col-md-6">
                    <div class="pad-10"></div>
                    <h2 class="section-title pb-10 wow fadeInUp own-bgGradient" data-wow-offset="50" data-wow-delay=".20s"> <?php echo $showCalTitle; ?> </h2>

                    <div class="calculate-form">
                        <form class="row">
                            <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                <div class="col-sm-3"> <label class="title-2"> height (cm): </label></div>
                                <div class="col-sm-9"> <input data-bind="in:value, f: float" data-name="height" type="text" placeholder="" class="form-control"> </div>
                            </div>
                            <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                <div class="col-sm-3"> <label class="title-2"> width (cm): </label></div>
                                <div class="col-sm-9"> <input data-bind="in:value, f: float" data-name="width" type="text" placeholder="" class="form-control"> </div>
                            </div>
                            <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                <div class="col-sm-3"> <label class="title-2"> depth (cm): </label></div>
                                <div class="col-sm-9"> <input data-bind="in:value, f: float" data-name="depth" type="text" placeholder="" class="form-control"> </div>
                            </div>
                            <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                <div class="col-sm-3"> <label class="title-2"> weight (kg): </label></div>
                                <div class="col-sm-9"> <input data-bind="in:value, f: float" data-name="weight" type="text" placeholder="" class="form-control"> </div>
                            </div>
                            <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                <div class="col-sm-3"> <label class="title-2"> location: </label></div>
                                <div class="col-sm-9">
                                    <div class="col-sm-6 no-pad">
                                        <input type="text" data-bind="in:value" data-name="locations[from]" placeholder="From" class="form-control from fw-600">
                                    </div>
                                    <div class="col-sm-6 no-pad">
                                        <input type="text" data-bind="in:value" data-name="locations[to]" placeholder="To" class="form-control to fw-600">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                <div class="col-sm-3"> <label class="title-2"> Package: </label></div>
                                <div class="col-sm-9">
                                    <div class="form-group">
                                        <select data-bind="in:value" data-name="package" class="selectpicker form-control" data-live-search="true" data-width="100%" data-toggle="tooltip" title="select your package">
                                            <option value="cost">Usual Delivery</option>
                                            <option value="cost + 25">Fastest Delivery: + $25</option>
                                            <option value="cost*0.9">Discount Delivery: -10%</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                <div class="col-sm-9 col-xs-12 pull-right">
                                    <div class="btn-1 own-bgGradient"> <span> Total Cost: </span>
                                        <span data-bind="out:price, f:currency" data-name="cost" class="btn-1 dark">
                                            <span class="pr-sign">-&nbsp;</span> $<span class="pr-wrap" style="display: none;"><span class="pr">0</span></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="pricing-condition">
                                <ul>
                                    <li><i class="fa fa-check-circle"></i> <?php echo $showCalList1; ?></li>
                                    <li><i class="fa fa-check-circle"></i> <?php echo $showCalList2; ?></li>
                                    <li><i class="fa fa-check-circle"></i> <?php echo $showCalList3; ?></li>
                                    <li><i class="fa fa-check-circle"></i> <?php echo $showCalList4; ?></li>
                                </ul>
                            </div>

                        </form>
                    </div>
                    <div class="pt-80 hidden-lg"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.Calculate Your Cost -->

    <!-- Steps -->
    <section class="steps-wrap mask-overlay pad-80" style="background-image: url('admin/uploads/<?php echo $showStepsbgImg; ?>');">
        <div class="theme-container container">
            <div class="row">
                <?php echo $showStepsContent; ?>
            </div>
        </div>
        <div class="step-img wow slideInRight" data-wow-offset="50" data-wow-delay=".20s"> <img src="admin/uploads/<?php echo $showStepsImg; ?>" alt="" /> </div>
    </section>
    <!-- /.Steps -->

    <!-- Product Delivery -->
    <section class="prod-delivery pad-120">
        <div class="theme-container container">
            <div class="row">
                <div class="col-md-11 col-md-offset-1">
                    <div class="pt-120 rel-div">
                        <div class="pb-50 hidden-xs"></div>
                        <?php echo $showDelContent; ?>
                        <div class="pb-120 hidden-xs"></div>
                    </div>
                    <div class="delivery-img pt-10">
                        <img alt="" src="admin/uploads/<?php echo $showDelImage; ?>" class="wow slideInLeft" data-wow-offset="50" data-wow-delay=".20s" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.Product Delivery -->

    <!-- Testimonial -->
    <section class="testimonial mask-overlay" style="background-image: url('admin/uploads/<?php echo $showTesBg; ?>')">
        <div class="theme-container container">
            <div class="testimonial-slider no-pagination pad-120">
                <div class="item">
                    <div class="testimonial-img darkclr-border theme-clr font-2 wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                        <img alt="" src="admin/uploads/<?php echo $showTesImage; ?>" />
                        <span>,,</span>
                    </div>
                    <div class="testimonial-content">
                        <p class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".25s"> <i class="gray-clr fs-16">
                                <?php echo $showTesDesc; ?>
                            </i> </p>
                        <h2 class="title-2 pt-10 wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s"> <?php echo $showTesName; ?> </h2>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-img darkclr-border theme-clr font-2">
                        <img alt="" src="admin/uploads/<?php echo $showTesImage2; ?>" />
                        <span>,,</span>
                    </div>
                    <div class="testimonial-content">
                        <p> <i class="gray-clr fs-16">
                               <?php echo $showTesDesc2; ?>
                            </i> </p>
                        <h2 class="title-2 pt-10">  <?php echo $showTesName2; ?> </h2>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-img darkclr-border theme-clr font-2">
                        <img alt="" src="admin/uploads/<?php echo $showTesImage3; ?>" />
                        <span>,,</span>
                    </div>
                    <div class="testimonial-content">
                        <p> <i class="gray-clr fs-16">
                                <?php echo $showTesDesc3; ?>
                            </i> </p>
                        <h2 class="title-2 pt-10"> <?php echo $showTesName3; ?> </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.Testimonial -->

    <!-- Pricing & Plans -->
    <section class="pricing-wrap pt-120" id="pricing">
        <div class="theme-container container">
            <div class="title-wrap text-center  pb-50">
                <h2 class="section-title wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">Pricing & plans</h2>
                <p class="wow fadeInLeft" data-wow-offset="50" data-wow-delay=".25s">See our pricing & plans to get best service</p>
            </div>
            <div class="row">
                <div class="col-md-4 wow slideInUp" data-wow-offset="50" data-wow-delay=".20s">
                   
                    <div class="pricing-box clrbg-before clrbg-after transition">
                        <?php echo $showPriceContent1; ?>
                    </div> 
                </div>
                <div class="col-md-4 active white-clr wow slideInUp" data-wow-offset="50" data-wow-delay=".25s">
                    <div class="pricing-box theme-clr-bg">
                        <?php echo $showPriceContent2; ?>
                    </div>
                </div>
            
                <div class="col-md-4 wow slideInUp" data-wow-offset="50" data-wow-delay=".30s">
                    <div class="pricing-box clrbg-before clrbg-after transition">
                        <?php echo $showPriceContent3; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.Pricing & Plans -->

    <!-- Apps -->
    <section class="pricing-wrap pt-120 pb-100">
        <div class="theme-container container">
            <div class="title-wrap text-center pb-10">
                <p class="wow fadeInLeft" data-wow-offset="50" data-wow-delay=".25s"><?php echo $showAppsSubTitle; ?></p>
                <h2 class="section-title wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s"><?php echo $showAppsTitle; ?></h2>
                <p class="wow fadeInLeft" data-wow-offset="50" data-wow-delay=".25s"><?php echo $showAppsContent; ?></p>
            </div>
            <div class="row">
                <div class="col-md-3 wow slideInUp" data-wow-offset="50" data-wow-delay=".20s">
                    <?php echo $showAppsContent1; ?>
                    <!-- <div class="apps-box">
                        <div class="icon"><i class="fa fa-compass" aria-hidden="true"></i></div>
                        <div class="text">
                            <h4 class="bottom15">
                                <span class="d-inline-block">Live Parcel Tracking</span>
                            </h4>
                            <p>Get the exact location and status of your consignments through our app.</p>
                        </div>
                    </div>
                    <div class="apps-box">
                        <div class="icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
                        <div class="text">
                            <h4 class="bottom15">
                                <span class="d-inline-block">Driver Panel</span>
                            </h4>
                            <p>Get the exact location and status of your consignments through our app.</p>
                        </div>
                    </div> -->
                </div>
                <div class="col-md-6 active white-clr wow slideInUp" data-wow-offset="50" data-wow-delay=".25s">
                    <div class="image feature-item d-inline-block wow fadeIn my-5 my-md-0" data-wow-delay="400ms" style="visibility: visible; animation-delay: 400ms; animation-name: fadeIn;">
                        <img src="admin/uploads/<?php echo $showAppsImage; ?>" alt="mobile phones">
                    </div>
                </div>
                <div class="col-md-3 wow slideInUp" data-wow-offset="50" data-wow-delay=".30s">
                    <?php echo $showAppsContent2; ?>
                    <!-- <div class="apps-box">
                        <div class="icon"><i class="fa fa-home" aria-hidden="true"></i></div>
                        <div class="text">
                            <h4 class="bottom15">
                                <span class="d-inline-block">Marchant Panel</span>
                            </h4>
                            <p>Get the exact location and status of your consignments through our app.</p>
                        </div>
                    </div>
                    <div class="apps-box">
                        <div class="icon"><i class="fa fa-hand-peace-o" aria-hidden="true"></i></div>
                        <div class="text">
                            <h4 class="bottom15">
                                <span class="d-inline-block">Easy Parcel Booking</span>
                            </h4>
                            <p>Get the exact location and status of your consignments through our app.</p>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="row d-flex align-items-center">
                <div class="col-md-12 text-center">
                    <div class="flex social-btns" style="margin-top:20px;">
                        <a class="app-btn blu flex vert" href="<?php echo $showAppsPlaystore; ?>">
                            <!-- <i class="fa fa-play" aria-hidden="true"></i>
                            <p>Get it on <br> <span class="big-txt">Google Play</span></p> -->
                            <img src="uploads/Google_Play_Button.png" alt="">
                        </a>
                        <a class="app-btn blu flex vert" href="<?php echo $showAppsAppstore; ?>">
                        <img src="uploads/appstore.png" alt="">
                            <!-- <i class="fa fa-apple" aria-hidden="true"></i>
                            <p>Get it on <br> <span class="big-txt">App Store</span></p> -->
                        </a>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.Apps -->

    <!-- Steps -->
    <!-- Steps -->
    <section class="steps-wrap mask-overlay pad-80" style="background-image: url('admin/uploads/<?php echo $showStepsbgImg2; ?>');">
        <div class="theme-container container">
            <div class="row">
                <?php echo $showContent2; ?>
            </div>
        </div>
        <div class="step-img wow slideInRight" data-wow-offset="50" data-wow-delay=".20s"> <img src="admin/uploads/<?php echo $showStepsImg2; ?>" alt="" /> </div>
    </section>
    <!-- /.Steps -->
    <!-- /.Steps -->

    <!-- Contact us -->
    <section class="contact-wrap pad-120" style="background-image: url('admin/uploads/<?php echo $showHomecontactImage; ?>')">
        <div class="theme-container container">
            <div class="row">
                <div class="col-md-6 col-sm-8">
                    <?php echo $showHomecontactContent; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- /.Contact us -->
</article>
<!-- /.Content Wrapper -->
<?php
require_once('footer.php');
