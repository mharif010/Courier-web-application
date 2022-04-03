<?php 
require_once('header.php'); 
include_once($_SERVER["DOCUMENT_ROOT"] . '/admin/controller/homeContactController.php');

$settingContacthome = new homeContactController;
$setContacthome = $settingContacthome->getContacthome();

foreach($setContacthome as $Contacthome){
    $showHomecontactContent = $Contacthome['content'];
    $showHomecontactImage   = $Contacthome['image'];
}
?>

            <!-- Content Wrapper -->
            <article> 
                <!-- Breadcrumb -->
                <section class="theme-breadcrumb pad-50">                
                    <div class="theme-container container ">  
                        <div class="row">
                            <div class="col-sm-8 pull-left">
                                <div class="title-wrap">
                                    <h2 class="section-title no-margin"> contact us </h2>
                                    <p class="fs-16 no-margin"> Get in touch with us easily </p>
                                </div>
                            </div>
                            <div class="col-sm-4">                        
                                <ol class="breadcrumb-menubar list-inline">
                                    <li><a href="#" class="gray-clr">Home</a></li>                                   
                                    <li class="active">contact</li>
                                </ol>
                            </div>  
                        </div>
                    </div>
                </section>
                <!-- /.Breadcrumb -->

                <!-- Contact Us -->
                <section class="contact-page pad-30">                    
                    <div class="theme-container container">               
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-md-offset-1">
                                 <?php echo $showHomecontactContent; ?>
                                <!-- <ul class="contact-detail title-2 pt-50">
                                    <li class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s"> <span>uk numbers:</span> <p class="gray-clr"> +001-2463-957 <br> +001-4356-643 </p> </li>
                                    <li class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".40s"> <span>usa numbers:</span> <p class="gray-clr"> +001-2463-957 <br> +001-4356-643 </p> </li>
                                    <li class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".50s"> <span>Email address:</span> <p class="gray-clr"> support@go.com <br> info@go.com </p> </li>
                                </ul> -->
                            </div>

                            <div class="col-md-4 col-sm-6 col-md-offset-1 contact-form">
                                <div class="calculate-form">
                                    <form class="row" id="contact-form">
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                            <div class="col-sm-3"> <label class="title-2"> Name: </label></div>
                                            <div class="col-sm-9"> <input type="text" name="Name" id="Name" required placeholder="" class="form-control"> </div>
                                        </div>
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                            <div class="col-sm-3"> <label class="title-2"> Email: </label></div>
                                            <div class="col-sm-9"> <input type="text" name="Email" id="Email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="" class="form-control"> </div>
                                        </div>
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                            <div class="col-sm-3"> <label class="title-2"> Phone: </label></div>
                                            <div class="col-sm-9"> <input type="text" name="Phone" id="Phone" placeholder="" class="form-control"> </div>
                                        </div>
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                            <div class="col-sm-3"> <label class="title-2"> Message: </label></div>
                                            <div class="col-sm-9"> <textarea class="form-control" name="Message" id="Message" required cols="25" rows="3"></textarea> </div>
                                        </div>
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                            <div class="col-sm-9 col-xs-12 pull-right">
                                                <button name="submit" id="submit_btn" class="btn-1"> send message </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.Contact Us -->

                <!-- Contact Map -->
                <section class="map">
                    <div class="theme-container container">                                                 
                        <div class="contact-map">
                            <img src="assets/img/background/contact-map.png" alt="" />
                            <div class="map-indicator">
                                <img class="marker-1 wow fadeIn" data-wow-offset="50" data-wow-delay=".30s" alt="" src="assets/img/icons/marker-1.png" />
                                <img class="marker-2 wow fadeIn" data-wow-offset="50" data-wow-delay=".40s" alt="" src="assets/img/icons/marker-1.png" />
                                <img class="marker-3 wow fadeInUp" data-wow-offset="50" data-wow-delay=".50s" alt="" src="assets/img/icons/marker-1.png" />
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.Contact Map -->

            </article>
            <!-- /.Content Wrapper -->

<?php 
require_once('footer.php');
