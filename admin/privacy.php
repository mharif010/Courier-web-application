<?php 
include('header.php');
include('handler/privacyHandler.php');

?>
<div class="content-wrapper">

    <div class="row">
        <div class="col-sm-9 mb-4 mb-xl-0">
        <h4 class="font-weight-bold text-dark">Site Privacy Policy here.</h4><br>

            <form action="" method="post" class="forms-sample" enctype="multipart/form-data">               
                
                <div class="form-group row">
                    <label for="exampleTextarea1" class="col-sm-4 col-form-label">Change Privacy Title</label>
                    <div class="col-sm-8">
                        <input type="text" name="title" class="form-control" placeholder="Enter Title Here" value="<?php echo $showTitle; ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="exampleTextarea1" class="col-sm-4 col-form-label">Change Privacy Sub Title</label>
                    <div class="col-sm-8">
                        <input type="text" name="subtitle" class="form-control" placeholder="Enter Title Here" value="<?php echo $showSubTitle; ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="exampleTextarea1" class="col-sm-4 col-form-label">Change Privacy Content</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" id="about" name="content" placeholder="Type privacy content...." rows="4"><?php echo $showContent; ?></textarea>
                    </div>
                </div>
               
                <button type="submit" name="privacy_page" class="btn btn-primary btn-rounded btn-fw">Save Changes</button>

            </form>


        </div>

    </div>


</div>

<?php include('footer.php'); ?>


