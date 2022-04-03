<?php 
include('header.php');
include('handler/calculateHandler.php');

?>
<div class="content-wrapper">

    <div class="row">
        <div class="col-sm-9 mb-4 mb-xl-0">
        <h4 class="font-weight-bold text-dark">Site Home Calculate from here.</h4><br>

            <form action="" method="post" class="forms-sample" enctype="multipart/form-data">               
                
                <div class="form-group row">
                    <label for="exampleTextarea1" class="col-sm-4 col-form-label">Change Calculate Title</label>
                    <div class="col-sm-8">
                        <input type="text" name="title" class="form-control" placeholder="Enter Title Here" value="<?php echo $showTitle; ?>">
                    </div>
                </div>

                <div class="form-group row main-list">
                    <label for="exampleTextarea1" class="col-sm-4 col-form-label">Change Calculate Content List</label>
                    <div class="col-sm-8">
                        <input type="text" name="list1" class="form-control" placeholder="Enter List Item Here" value="<?php echo $showList1;  ?>">
                    </div>
                </div>

                <div class="form-group row main-list">
                    <label for="exampleTextarea1" class="col-sm-4 col-form-label">Change Calculate Content List</label>
                    <div class="col-sm-8">
                        <input type="text" name="list2" class="form-control" placeholder="Enter List Item Here" value="<?php echo $showList2; ?>">
                    </div>
                </div>

                <div class="form-group row main-list">
                    <label for="exampleTextarea1" class="col-sm-4 col-form-label">Change Calculate Content List</label>
                    <div class="col-sm-8">
                        <input type="text" name="list3" class="form-control" placeholder="Enter List Item Here" value="<?php echo $showList3; ?>">
                    </div>
                </div>

                <div class="form-group row main-list">
                    <label for="exampleTextarea1" class="col-sm-4 col-form-label">Change Calculate Content List</label>
                    <div class="col-sm-8">
                        <input type="text" name="list4" class="form-control" placeholder="Enter List Item Here" value="<?php echo $showList4; ?>">
                    </div>
                </div>

               
                

                

                

                <!-- <div class="form-group row">
                    <label for="exampleTextarea1" class="col-sm-4 col-form-label">Change Calculate Content</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" id="about" name="content" placeholder="Type about content...." rows="4"><?php echo $showContent; ?></textarea>
                    </div>
                </div> -->

                <div class="form-group row">
                    <label for="exampleInputMobile" class="col-sm-4 col-form-label">Change Calculate Image</label>
                    <div class="col-sm-8">
                        <input type="file" name="image" class="form-control file-upload-info" placeholder="Upload Image">
                    </div>
                </div> 
               
                <button type="submit" name="calculate" class="btn btn-primary btn-rounded btn-fw">Save Changes</button>

            </form>


        </div>

    </div>


</div>

<?php include('footer.php'); ?>




