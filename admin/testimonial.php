<?php 
include('header.php');
include('handler/testimonialHandler.php');

?>
<div class="content-wrapper">

    <div class="row">
        <div class="col-sm-9 mb-4 mb-xl-0">
        <h4 class="font-weight-bold text-dark">Site Home Testimonial from here.</h4><br>

            <form action="" method="post" class="forms-sample" enctype="multipart/form-data">  

                <div class="form-group row">
                    <label for="exampleInputMobile" class="col-sm-4 col-form-label">Change Section Background Image</label>
                    <div class="col-sm-8">
                        <input type="file" name="bg_image" class="form-control file-upload-info" placeholder="Upload Image">
                    </div>
                </div>
                
                <hr> 

                <div class="form-group row">
                    <label for="exampleInputMobile" class="col-sm-4 col-form-label">Change Profile Image</label>
                    <div class="col-sm-8">
                        <input type="file" name="image" class="form-control file-upload-info" placeholder="Upload Image">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="exampleTextarea1" class="col-sm-4 col-form-label">Change Profile Description</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" name="description" placeholder="Type description content...." rows="4"><?php echo $showTesDesc; ?></textarea>                        
                    </div>
                </div>

                <div class="form-group row">
                    <label for="exampleTextarea1" class="col-sm-4 col-form-label">Change Profile Name</label>
                    <div class="col-sm-8">
                        <input type="text" name="name" class="form-control" placeholder="Enter Name Here" value="<?php echo $showTesName; ?>">
                    </div>
                </div> 

                <hr>

                 <div class="form-group row">
                    <label for="exampleInputMobile" class="col-sm-4 col-form-label">Change Profile Image</label>
                    <div class="col-sm-8">
                        <input type="file" name="image_2" class="form-control file-upload-info" placeholder="Upload Image">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="exampleTextarea1" class="col-sm-4 col-form-label">Change Profile Description</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" name="description_2" placeholder="Type Description content...." rows="4"><?php echo $showTesDesc2; ?></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="exampleTextarea1" class="col-sm-4 col-form-label">Change Profile Name</label>
                    <div class="col-sm-8">
                        <input type="text" name="name_2" class="form-control" placeholder="Enter Name Here" value="<?php echo $showTesName2; ?>">
                    </div>
                </div> 

                <hr>

                <div class="form-group row">
                    <label for="exampleInputMobile" class="col-sm-4 col-form-label">Change Profile Image</label>
                    <div class="col-sm-8">
                        <input type="file" name="image_3" class="form-control file-upload-info" placeholder="Upload Image">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="exampleTextarea1" class="col-sm-4 col-form-label">Change Profile Description</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" name="description_3" placeholder="Type Description content...." rows="4"><?php echo $showTesDesc3; ?></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="exampleTextarea1" class="col-sm-4 col-form-label">Change Profile Name</label>
                    <div class="col-sm-8">
                        <input type="text" name="name_3" class="form-control" placeholder="Enter Name Here" value="<?php echo $showTesName3; ?>">
                    </div>
                </div> 

               
                <button type="submit" name="testimonial" class="btn btn-primary btn-rounded btn-fw">Save Changes</button>

            </form>


        </div>

    </div>


</div>

<?php include('footer.php'); ?>


