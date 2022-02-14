<?php 
include('header.php');
include('handler/stepsOneHandler.php');

?>
<div class="content-wrapper">

    <div class="row">
        <div class="col-sm-9 mb-4 mb-xl-0">
        <h4 class="font-weight-bold text-dark">Site Home Steps One from here.</h4><br>

            <form action="" method="post" class="forms-sample" enctype="multipart/form-data">               

                <div class="form-group row">
                    <label for="exampleTextarea1" class="col-sm-4 col-form-label">Change Steps Content</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" id="about" name="content" placeholder="Type steps content...." rows="4"><?php echo $showContent; ?></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="exampleInputMobile" class="col-sm-4 col-form-label">Change Steps Image</label>
                    <div class="col-sm-8">
                        <input type="file" name="image" class="form-control file-upload-info" placeholder="Upload Image">
                    </div>
                </div> 

                <div class="form-group row">
                    <label for="exampleInputMobile" class="col-sm-4 col-form-label">Change Steps Background Image</label>
                    <div class="col-sm-8">
                        <input type="file" name="bg_image" class="form-control file-upload-info" placeholder="Upload Image">
                    </div>
                </div> 
               
                <button type="submit" name="steps_one" class="btn btn-primary btn-rounded btn-fw">Save Changes</button>

            </form>


        </div>

    </div>


</div>

<?php include('footer.php'); ?>


