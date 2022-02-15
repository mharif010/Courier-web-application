<?php 
include('header.php');
include('handler/aboutHandler.php');

?>
<div class="content-wrapper">

    <div class="row">
        <div class="col-sm-9 mb-4 mb-xl-0">
        <h4 class="font-weight-bold text-dark">Site Home About from here.</h4><br>

            <form action="" method="post" class="forms-sample" enctype="multipart/form-data">               
                
                <div class="form-group row">
                    <label for="exampleTextarea1" class="col-sm-4 col-form-label">Change About Title</label>
                    <div class="col-sm-8">
                        <input type="text" name="title" class="form-control" placeholder="Enter Title Here" value="<?php echo $showTitle; ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="exampleTextarea1" class="col-sm-4 col-form-label">Change About Sub Title</label>
                    <div class="col-sm-8">
                        <input type="text" name="subtitle" class="form-control" placeholder="Enter Title Here" value="<?php echo $showSubTitle; ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="exampleTextarea1" class="col-sm-4 col-form-label">Change About Content</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" id="about" name="content" placeholder="Type about content...." rows="4"><?php echo $showContent; ?></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="exampleInputMobile" class="col-sm-4 col-form-label">Change About Image</label>
                    <div class="col-sm-8">
                        <input type="file" name="image" class="form-control file-upload-info" placeholder="Upload Image">
                    </div>
                </div> 
                <div class="form-group row">
                    <label for="exampleTextarea1" class="col-sm-4 col-form-label">Change About Box1 Content</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" id="about1" name="content1" placeholder="Type about content...." rows="4"><?php echo $showContent1; ?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleTextarea1" class="col-sm-4 col-form-label">Change About Box2 Content</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" id="about2" name="content2" placeholder="Type about content...." rows="4"><?php echo $showContent2; ?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleTextarea1" class="col-sm-4 col-form-label">Change About Box3 Content</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" id="about3" name="content3" placeholder="Type about content...." rows="4"><?php echo $showContent3; ?></textarea>
                    </div>
                </div>
               
                <button type="submit" name="about_page" class="btn btn-primary btn-rounded btn-fw">Save Changes</button>

            </form>


        </div>

    </div>


</div>

<?php include('footer.php'); ?>


