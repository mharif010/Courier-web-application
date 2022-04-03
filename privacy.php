<?php
require_once('header.php'); 
include_once($_SERVER["DOCUMENT_ROOT"] . '/handler/privacyHandler.php');
?>
<!-- Content Wrapper -->
<article>
    <!-- Breadcrumb -->
    <section class="theme-breadcrumb pad-100" style="background-color: #33cc99;">
        <div class="theme-container container ">
            <div class="row">
                <div class="col-sm-12 text-center pull-left">
                    <div class="title-wrap">
                        <h2 class="section-title mb-5 underline" style="color: #fff;"> <?php echo $showTitle; ?> </h2>
                        <p class="fs-16 no-margin" style="color: #fff;"> <?php echo $showSubTitle; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.Breadcrumb -->

    <!-- Tracking -->
    <section class="pt-50 pb-120 tracking-wrap">
        <div class="theme-container container " style="
    background: white;
    margin-top: -110px;
    border-top: 1px solid #8a99cd;">
            <div class="row pt-50">
                <div class="col-md-10 col-md-offset-1 tracking-form wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                    <div class="privacy-content">
                        <?php echo $showContent; ?>
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
