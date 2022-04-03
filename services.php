<?php 
require_once('header.php'); 
include_once($_SERVER["DOCUMENT_ROOT"] . '/admin/controller/serviceController.php');
$setService = new serviceController;
$services    = $setService->getService();
?>
    <article> 
        <!-- New Services -->
        <section class="pad-80" style="position:relative; background-size: cover; background-repeat: repeat; background-color: rgba(0, 0, 0, 0); background-image: url('https://logtik.wpengine.com/wp-content/uploads/2019/04/bg1.jpg'); background-attachment: scroll; min-width: 1903px; left: 0px; width: 1903px;height:500px;">
            <div id="overlay"> 
            </div>
            <div class="container" style="position:relative">
                <div class="row text-center new-service">
                    <h1 class="service-title">OUR SERVICES</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indus<br>
try’s standard dummy text ever since the 1500s, when an unknown printer took.</p> 
                </div>
                <div class="row bg-service">
                    <div class="content-boxs">

                        <div class="content-box">
                            <div class="background"></div>
                            <div class="foreground">
                                
                                <div class="content-info">
                                    <div class="content-icon">
                                       <img src="uploads/Icon 1.svg" class="svg-tag" alt="">
                                    </div>
                                    <h2 class="content-title">OCEAN FREIGHT</h2>
                                    <div class="content-desc">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum the industry’s. 
                                    </div>
                                    <div class="content-btn"><a href="contact.php" class="btn-1">More Details</a></div>
                                </div>
                            </div>
                        </div>

                       <div class="content-box">
                            <div class="background"></div>
                            <div class="foreground">
                                
                                <div class="content-info">
                                    <div class="content-icon">
                                        <img src="uploads/Icon 2.svg" class="svg-tag" alt="">
                                    </div>
                                    <h2 class="content-title">LAND FREIGHT</h2>
                                    <div class="content-desc">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum the industry’s. 
                                    </div>
                                    <div class="content-btn"><a href="contact.php" class="btn-1">More Details</a></div>
                                </div>
                            </div>
                        </div>

                        <div class="content-box">
                            <div class="background"></div>
                            <div class="foreground">
                                
                                <div class="content-info">
                                    <div class="content-icon">
                                        <img src="uploads/Icon 3.svg" class="svg-tag" alt="">
                                    </div>
                                    <h2 class="content-title">AIR FREIGHT</h2>
                                    <div class="content-desc">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum the industry’s. 
                                    </div>
                                    <div class="content-btn"><a href="contact.php" class="btn-1">More Details</a></div>
                                </div>
                            </div>
                        </div>

                        <div class="content-box">
                            <div class="background"></div>
                            <div class="foreground">
                                
                                <div class="content-info">
                                    <div class="content-icon">
                                       <img src="uploads/Icon 4.svg" class="svg-tag" alt="">
                                    </div>
                                    <h2 class="content-title">WARE HOUSING</h2>
                                    <div class="content-desc">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum the industry’s. 
                                    </div>
                                    <div class="content-btn"><a href="contact.php" class="btn-1">More Details</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="content-box">
                            <div class="background"></div>
                            <div class="foreground">
                                
                                <div class="content-info">
                                    <div class="content-icon">
                                       <img src="uploads/Icon 5.svg" class="svg-tag" alt="">
                                    </div>
                                    <h2 class="content-title">STORAGE SOLUTIONS</h2>
                                    <div class="content-desc">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum the industry’s. 
                                    </div>
                                    <div class="content-btn"><a href="contact.php" class="btn-1">More Details</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="content-box">
                            <div class="background"></div>
                            <div class="foreground">
                                
                                <div class="content-info">
                                    <div class="content-icon">
                                        <img src="uploads/Icon 6.svg" class="svg-tag" alt="">
                                    </div>
                                    <h2 class="content-title">FREIGHT FORWARDING</h2>
                                    <div class="content-desc">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum the industry’s. 
                                    </div>
                                    <div class="content-btn"><a href="contact.php" class="btn-1">More Details</a></div>
                                </div>
                            </div>
                        </div>                       
                    
                    </div>
                </div>
            </div>
        </section>
        <section style="position:relative;height:650px; background-image: url('admin/uploads/bg-icon121.png');">
        </section>

        <!-- slider -->
        <section>
            <div class="container-fluid">
                <div class="row text-center new-service what-we-do">
                    <h1 class="service-title" style="margin-bottom:25px;">WHAT WE DO</h1> 
                </div>
                <div class="mhn-slide owl-carousel">
                    <?php if( !empty($services) ){ 
                        while($row = $services->fetch_array()){
                        ?>
                    <div class="mhn-item">
                        <div class="mhn-inner">
                            <img src="admin/uploads/<?php echo $row['image']; ?>">
                            <div class="mhn-text">
                                <h4><?php echo $row['title']; ?></h4>
                                <p><?php echo $row['content']; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php } }else{
                       echo '<div class="alert alert-danger"><em>No records were found.</em></div>';  
                     } ?> 
                            
                </div>
            </div>
        </section>
  </article>
    <!-- /.Content Wrapper -->


<?php require_once('footer.php');
?>

<script>
    $(function(){
	$('.mhn-slide').owlCarousel({
		nav:true,
		//loop:true,
		slideBy:'page',
		rewind:false,
		responsive:{
			0:{items:1},
			480:{items:2},
			600:{items:3},
			1000:{items:4}
		},
		smartSpeed:70,
		onInitialized:function(e){
			$(e.target).find('img').each(function(){
				if(this.complete){
					$(this).closest('.mhn-inner').find('.loader-circle').hide();
					$(this).closest('.mhn-inner').find('.mhn-img').css('background-image','url('+$(e.target).attr('src')+')');
				}else{
					$(this).bind('load',function(e){
						$(e.target).closest('.mhn-inner').find('.loader-circle').hide();
						$(e.target).closest('.mhn-inner').find('.mhn-img').css('background-image','url('+$(e.target).attr('src')+')');
					});
				}
			});
		},
		navText:['<svg viewBox="0 0 24 24"><path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"></path></svg>','<svg viewBox="0 0 24 24"><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path></svg>']
	});
});
</script>