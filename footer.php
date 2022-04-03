<?php 
include_once($_SERVER["DOCUMENT_ROOT"] . '/admin/handler/footerHandler.php');

?>
<!-- Footer -->
            <footer>
                <div class="footer-main pad-120 white-clr">
                    <div class="theme-container container">               
                        <div class="row">
                            <div class="col-md-3 col-sm-6 footer-widget footer-about">
                                <a href="#"> <img class="logo" alt="#" src="admin/uploads/<?php echo $showFooterLogo; ?>" />  </a>
                               
                                <p><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $showFooterContent1; ?></p>
                                <p style="margin-left: 35px;"> <?php echo $showFooterContent2; ?></p>
                                <p style="
    font-size: 16px;
    letter-spacing: 2px;"><i class="fa fa-envelope-o" aria-hidden="true"></i> <?php echo $showFooterContent3; ?><br> 
                                <i class="fa fa-phone" aria-hidden="true"></i><a href="tel:<?php echo $showFooterContent4; ?>"> <?php echo $showFooterContent4; ?></a></p>
                            </div>
                            <div class="col-md-3 col-sm-6 footer-widget">
                                <h2 class="title-1 fw-900">COMPANY</h2>
                                <ul>
                                    <li> <a href="/about.php">About US</a> </li>
                                    <li> <a href="/services.php">Our Services</a> </li>
                                    <li> <a href="#pricing">Pricing & Plans</a> </li>
                                    <li> <a href="/privacy.php">Privacy and Policy</a> </li>
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6 footer-widget">
                                <h2 class="title-1 fw-900">QUICK LINKS</h2>
                                <ul>
                                    <li> <a data-toggle="modal" href="#login-popup">Become Marchent</a> </li>
                                    <li> <a href="contact.php">Become Rider</a> </li>
                                    <li> <a href="contact.php">Become Delivery Man</a> </li>
                                    <li> <a data-toggle="modal" href="tel:+8801711368635">Helpline</a> </li>
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6 footer-widget">
                                <h2 class="title-1 fw-900">get in touch</h2>
                                <ul class="social-icons list-inline">
                                    <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".20s"> <a href="#" class="fa fa-facebook"></a> </li>
                                    <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".25s"> <a href="#" class="fa fa-twitter"></a> </li>
                                    <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".30s"> <a href="#" class="fa fa-google-plus"></a> </li>
                                    <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".35s"> <a href="#" class="fa fa-linkedin"></a> </li>
                                </ul>
                                <ul class="payment-icons list-inline">
                                    <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".20s"> <a href="#"> <img alt="#" src="assets/img/icons/payment-1.png" /> </a> </li>
                                    <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".25s"> <a href="#"> <img alt="#" src="assets/img/icons/payment-2.png" /> </a> </li>
                                    <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".30s"> <a href="#"> <img alt="#" src="assets/img/icons/payment-3.png" /> </a> </li>
                                    <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".35s"> <a href="#"> <img alt="#" src="assets/img/icons/payment-4.png" /> </a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer-bottom">
                    <div class="theme-container container">               
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <p> © <?php echo $showFooterCopyright; ?> </p>                            
                            </div>
                            <div class="col-md-6 col-sm-6 text-right">
                                <p> Design and Develop  by <a href="https://xubisoft.com" class="main-clr"> Xubisoft Ltd. </a> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- /.Footer -->


        </main>
        <!-- / Main Wrapper -->

        <!-- Top -->
        <div class="to-top theme-clr-bg transition"> <i class="fa fa-angle-up"></i> </div>

        <!-- Popup: Login -->
        <div class="modal fade login-popup" id="login-popup" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-md">                
                <a class="close close-btn" data-dismiss="modal" aria-label="Close"> x </a>

                <div class="modal-content">   
                    <div class="login-wrap text-center">                        
                        <h2 class="title-3"> Become a Marchent </h2>
                        <p> Sign up to <strong> GO </strong> for getting all details </p>                        

                        <div class="login-form clrbg-before">
                            <form class="login">
                                <div class="form-group"><input type="text" placeholder="Name of Business" class="form-control"></div>
                                <div class="form-group"><input type="text" placeholder="First Name" class="form-control"></div>
                                <div class="form-group"><input type="text" placeholder="Last Name" class="form-control"></div>
                                <div class="form-group">
                                    <textarea type="text" placeholder="Address of your pickup Location" rows="4" cols="50" style="height:80px" class="form-control"></textarea>
                                </div>
                                <div class="form-group"><input type="text" placeholder="Phone Number" class="form-control"></div>
                                <div class="form-group"><input type="email" placeholder="Email address" class="form-control"></div>
                                <div class="form-group"><input type="password" placeholder="Password" class="form-control"></div>
                                <div class="form-group">
                                    <button class="btn-1 " type="submit"> Submit now </button>
                                </div>
                            </form>
                            <a href="#" class="gray-clr"> Forgot Passoword? </a>                            
                        </div>                        
                    </div>
                    <div class="create-accnt">
                        <a href="#" class="white-clr"> Do You have an account? </a>  
                        <h2 class="title-2"> <a href="#" class="green-clr under-line">Login</a> </h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Popup: Login --> 

        <!-- Search Popup -->
        <div class="search-popup">
            <div>
                <div class="popup-box-inner">
                    <form>
                        <input class="search-query" type="text" placeholder="Search and hit enter" />
                    </form>
                </div>
            </div>
            <a href="javascript:void(0)" class="close-search"><i class="fa fa-close"></i></a>
        </div>
        <!-- / Search Popup -->

        <!-- Main Jquery JS -->
        <script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>        
        <!-- Bootstrap JS -->
        <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>    
        <!-- Bootstrap Select JS -->
        <script src="assets/js/bootstrap-select.min.js" type="text/javascript"></script>    
        <!-- OwlCarousel2 Slider JS -->
        <script src="assets/js/owl.carousel.min.js" type="text/javascript"></script>   
        <!-- Sticky Header -->
        <script src="assets/js/jquery.sticky.js"></script>
        <!-- Wow JS -->
        <script src="assets/js/wow.min.js" type="text/javascript"></script>
        <!-- Data binder -->
        <script src="assets/js/data.binder.js" type="text/javascript"></script>
         <!-- Map JS -->
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
        <!-- Theme JS -->
        <script src="assets/js/theme-ajax-mail.js" type="text/javascript"></script>        

        <script>
            function searchToggle(obj, evt){
                var container = $(obj).closest('.search-wrapper');
                    if(!container.hasClass('active')){
                        container.addClass('active');
                        evt.preventDefault();
                    }
                    else if(container.hasClass('active') && $(obj).closest('.input-holder').length == 0){
                        container.removeClass('active');
                        // clear input
                        container.find('.search-input').val('');
                    }
            }
        </script>
        <!-- Theme JS -->
        <script src="assets/js/theme.js" type="text/javascript"></script>


    </body>
</html>
