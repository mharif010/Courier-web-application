<?php 
include('header.php');
include('handler/serviceHandler.php');

?>
<div class="content-wrapper">

    <div class="row">
        <div class="col-sm-9 mb-4 mb-xl-0">
        <h4 class="font-weight-bold text-dark">Site Home About from here.</h4><br>

            <form action="" method="post" class="forms-sample" enctype="multipart/form-data">               
                
                <div class="form-group row">
                    <label for="exampleTextarea1" class="col-sm-4 col-form-label">Create Service Title</label>
                    <div class="col-sm-8">
                        <input type="text" name="title" class="form-control" placeholder="Enter Title Here">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="exampleTextarea1" class="col-sm-4 col-form-label">Write Service Content</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" id="about" name="content" placeholder="Type about content...." rows="4"></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="exampleInputMobile" class="col-sm-4 col-form-label">Upload Service Image</label>
                    <div class="col-sm-8">
                        <input type="file" name="image" class="form-control file-upload-info" placeholder="Upload Image">
                    </div>
                </div> 
               
                <button type="submit" name="add_service" class="btn btn-primary btn-rounded btn-fw">Save Changes</button>

            </form>


        </div>

    </div>


</div>

<?php include('footer.php'); ?>


