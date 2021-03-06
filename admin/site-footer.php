<?php 
include('header.php');
include('handler/footerHandler.php');
?>
<div class="content-wrapper">

    <div class="row">
        <div class="col-sm-9 mb-4 mb-xl-0">
        <h4 class="font-weight-bold text-dark">Site Footer from here.</h4><br>

            <form action="" method="post" class="forms-sample" enctype="multipart/form-data">               

                <div class="form-group row">
                    <label for="exampleInputMobile" class="col-sm-4 col-form-label">Change Footer Logo Image</label>
                    <div class="col-sm-8">
                        <input type="file" name="image" class="form-control file-upload-info" placeholder="Upload Image">
                    </div>
                </div>

                <div class="form-group row main-list">
                    <label for="exampleTextarea1" class="col-sm-4 col-form-label">Change Footer House </label>
                    <div class="col-sm-8">
                        <input type="text" name="add1" class="form-control" placeholder="Enter List Item Here" value="<?php echo $showFooterContent1; ?>">
                    </div>
                </div>

                <div class="form-group row main-list">
                    <label for="exampleTextarea1" class="col-sm-4 col-form-label">Change Footer City</label>
                    <div class="col-sm-8">
                        <input type="text" name="add2" class="form-control" placeholder="Enter List Item Here" value="<?php echo $showFooterContent2; ?>">
                    </div>
                </div>
                <div class="form-group row main-list">
                    <label for="exampleTextarea1" class="col-sm-4 col-form-label">Change Footer Email</label>
                    <div class="col-sm-8">
                        <input type="text" name="add3" class="form-control" placeholder="Enter List Item Here" value="<?php echo $showFooterContent3; ?>">
                    </div>
                </div>

                <div class="form-group row main-list">
                    <label for="exampleTextarea1" class="col-sm-4 col-form-label">Change Footer Phone</label>
                    <div class="col-sm-8">
                        <input type="text" name="add4" class="form-control" placeholder="Enter phone number Here" value="<?php echo $showFooterContent4; ?>">
                    </div>
                </div>

                <!-- <div class="form-group row">
                    <label for="exampleTextarea1" class="col-sm-4 col-form-label">Change Footer Content</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" id="about" name="content" placeholder="Type footer content...." rows="4"><?php echo $showFooterContent; ?></textarea>
                    </div>
                </div> -->

                <div class="form-group row">
                    <label for="exampleTextarea1" class="col-sm-4 col-form-label">Change Footer Copyrights</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" name="copyright" placeholder="Type Copyright content...." rows="4"><?php echo $showFooterCopyright; ?></textarea>
                    </div>
                </div>
               
                <button type="submit" name="footer" class="btn btn-primary btn-rounded btn-fw">Save Changes</button>

            </form>


        </div>

    </div>


</div>

<?php include('footer.php'); ?>


