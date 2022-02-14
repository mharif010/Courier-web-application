<?php
include('header.php');
include('handler/bannerHandler.php');
?>

<div class="content-wrapper">

    <div class="row">
        <div class="col-sm-9 mb-4 mb-xl-0">
        <h4 class="font-weight-bold text-dark">Site Banner from here.</h4><br>

            <form action="" method="post" class="forms-sample" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="exampleInputMobile" class="col-sm-4 col-form-label">Change Banner Icon</label>
                    <div class="col-sm-8">
                        <input type="file" name="banner_icon" class="form-control file-upload-info" placeholder="Upload Image">
                    </div>
                </div>
                
            
                <div class="form-group row">
                    <label for="exampleInputUsername2" class="col-sm-4 col-form-label">Change Banner Link Text</label>
                    <div class="col-sm-4">
                        <input type="text" name="banner_lt1" class="form-control" placeholder="Link Text" value="<?php echo $showLinkTxt1; ?>">
                    </div>
                    <div class="col-sm-4">
                        <input type="text" name="banner_lu1" class="form-control" placeholder="Link url" value="<?php echo $showLinkUrl1; ?>">
                    </div>
                    <label for="exampleInputUsername2" class="col-sm-4 col-form-label"></label>
                    <div class="col-sm-4 mb-3">
                        <input type="text" name="banner_lt2" class="form-control" placeholder="Link Text" value="<?php echo $showLinkTxt2; ?>">
                    </div>
                    <div class="col-sm-4 mb-3">
                        <input type="text" name="banner_lu2" class="form-control" placeholder="Link url" value="<?php echo $showLinkUrl2; ?>">
                    </div>
                    <label for="exampleInputUsername2" class="col-sm-4 col-form-label"></label>
                    <div class="col-sm-4">
                        <input type="text" name="banner_lt3" class="form-control" placeholder="Link Text" value="<?php echo $showLinkTxt3; ?>">
                    </div>
                    <div class="col-sm-4">
                        <input type="text" name="banner_lu3" class="form-control" placeholder="Link url" value="<?php echo $showLinkUrl3; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleTextarea1" class="col-sm-4 col-form-label">Change Banner Title</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" name="banner_heading" placeholder="Type banner heading...." rows="4"><?php echo $showHeading; ?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputUsername2" class="col-sm-4 col-form-label">Change Banner Button</label>
                    <div class="col-sm-4">
                        <input type="text" name="banner_btn" class="form-control" placeholder="Button Text" value="<?php echo $showBtnTxt; ?>">
                    </div>
                    <div class="col-sm-4">
                        <input type="text" name="banner_btnUrl" class="form-control" placeholder="Button url" value="<?php echo $showBtnLink; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputMobile" class="col-sm-4 col-form-label">Change Banner Background</label>
                    <div class="col-sm-8">
                        <input type="file" name="banner_bg" class="form-control file-upload-info" placeholder="Upload Image">
                    </div>
                </div>

                <button type="submit" name="site_banner" class="btn btn-primary btn-rounded btn-fw">Save Changes</button>

            </form>


        </div>

    </div>


</div>
<!-- content-wrapper ends -->
<?php include('footer.php'); ?>