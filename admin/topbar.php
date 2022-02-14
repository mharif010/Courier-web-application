<?php
include('header.php');
include('handler/topbarHandler.php');
?>


<div class="content-wrapper">

    <div class="row">
        <div class="col-sm-6 mb-4 mb-xl-0">
        <h4 class="font-weight-bold text-dark">Site Topbar from here.</h4><br>

            <form action="" method="post" class="forms-sample" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Change Call Number</label>
                    <div class="col-sm-9">
                        <input type="text" name="topbar_phone" class="form-control" placeholder="Phone number" value="<?php echo $showPhone; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Change Topbar Background</label>
                    <div class="col-sm-9">
                        <input type="file" name="topbar_bg" class="form-control file-upload-info" placeholder="Upload Image">
                    </div>
                </div>

                <button type="submit" name="site_topbar" class="btn btn-primary btn-rounded btn-fw">Save Changes</button>

            </form>


        </div>

    </div>


</div>
<!-- content-wrapper ends -->
<?php include('footer.php'); ?>