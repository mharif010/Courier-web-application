<?php 
include('header.php');
include('handler/homeAppsHandler.php');

?>
<div class="content-wrapper">

    <div class="row">
        <div class="col-sm-9 mb-4 mb-xl-0">
        <h4 class="font-weight-bold text-dark">Site Home Apps Part from here.</h4><br>

            <form action="" method="post" class="forms-sample" enctype="multipart/form-data">               
                
                <div class="form-group row">
                    <label for="exampleTextarea1" class="col-sm-4 col-form-label">Change Apps SubTitle</label>
                    <div class="col-sm-8">
                        <input type="text" name="subtitle" class="form-control" placeholder="Enter SubTitle Here" value="<?php echo $showAppsSubTitle; ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="exampleTextarea1" class="col-sm-4 col-form-label">Change Apps Title</label>
                    <div class="col-sm-8">
                        <input type="text" name="title" class="form-control" placeholder="Enter Title Here" value="<?php echo $showAppsTitle; ?>">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="exampleTextarea1" class="col-sm-4 col-form-label">Change Apps Description</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" name="content" placeholder="Type apps content...." rows="4"><?php echo $showAppsContent; ?></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="exampleTextarea1" class="col-sm-4 col-form-label">Change Apps Left Side Content</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" id="about" name="content1" placeholder="Type apps content...." rows="4"><?php echo $showAppsContent1; ?></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="exampleInputMobile" class="col-sm-4 col-form-label">Change Apps Image</label>
                    <div class="col-sm-8">
                        <input type="file" name="image" class="form-control file-upload-info" placeholder="Upload Image">
                    </div>
                </div> 

                <div class="form-group row">
                    <label for="exampleTextarea1" class="col-sm-4 col-form-label">Change Apps Right Side Content</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" id="about1" name="content2" placeholder="Type apps content...." rows="4"><?php echo $showAppsContent2; ?></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="exampleTextarea1" class="col-sm-4 col-form-label">Change Google Play Link</label>
                    <div class="col-sm-8">
                        <input type="text" name="play_link" class="form-control" placeholder="Enter playstore link" value="<?php echo $showAppsPlaystore; ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="exampleTextarea1" class="col-sm-4 col-form-label">Change Apps Apple Store Link</label>
                    <div class="col-sm-8">
                        <input type="text" name="store_link" class="form-control" placeholder="Enter app store link" value="<?php echo $showAppsAppstore; ?>">
                    </div>
                </div>
               
                <button type="submit" name="apps_home" class="btn btn-primary btn-rounded btn-fw">Save Changes</button>

            </form>


        </div>

    </div>


</div>

<?php include('footer.php'); ?>


