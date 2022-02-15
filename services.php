<?php 
require_once('header.php'); 
include_once($_SERVER["DOCUMENT_ROOT"] . '/courier/admin/controller/serviceController.php');
$setService = new serviceController;
$services    = $setService->getService();
?>
    <article> 
        <!-- Breadcrumb -->
        <section class="theme-breadcrumb pad-50">                
            <div class="theme-container container ">  
                <div class="row">
                    <div class="col-sm-8 pull-left">
                        <div class="title-wrap">
                            <h2 class="section-title no-margin"> Service Items </h2>
                            <p class="fs-16 no-margin"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nesciunt. </p>
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
        <!-- Services -->
        <section class="pricing-wrap pad-80">                
            <div class="theme-container container">                            
                <div class="row pb-50">
                    <?php if( !empty($services) ){ 
                        while($row = $services->fetch_array()){
                        ?>  
                    <div class="col-md-4 wow fadeInUp" style="margin-bottom:30px;" data-wow-offset="50" data-wow-delay=".30s">
                
                        <div class="box"> 
                            <img src="admin/uploads/<?php echo $row['image']; ?>" alt="tile3">
                            <div class="overbox">
                                <div class="tagline overtext"><?php echo $row['content']; ?> </div>
                            </div>
                            <h2><?php echo $row['title']; ?></h2>
                        </div>

                    </div>
                    <?php } }else{
                       echo '<div class="alert alert-danger"><em>No records were found.</em></div>';  
                     } ?>                  
                </div>    
            </div>               
        </section>
        <!-- /.services -->
    </article>
    <!-- /.Content Wrapper -->


<?php require_once('footer.php');