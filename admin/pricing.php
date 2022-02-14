<?php 
include('header.php');
include('handler/pricingHandler.php');
?>
<div class="content-wrapper">

    <div class="row">
        <div class="col-sm-9 mb-4 mb-xl-0">
        <h4 class="font-weight-bold text-dark">Site Home Pricing Part from here.</h4><br>

            <form action="" method="post" class="forms-sample" enctype="multipart/form-data">               

                <div class="form-group row">
                    <label for="exampleInputUsername2" class="col-sm-4 col-form-label">Change Pricing Title</label>
                    <div class="col-sm-8">
                        <input type="text" name="title" class="form-control" placeholder="Site title" value="<?php echo $showPriceTitle; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputUsername2" class="col-sm-4 col-form-label">Change Pricing Sub Title</label>
                    <div class="col-sm-8">
                        <input type="text" name="sub_title" class="form-control" placeholder="Site Sub title" value="<?php echo $showPriceSubTitle; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleTextarea1" class="col-sm-4 col-form-label">Change Price Box 1</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" id="about" name="contentOne" placeholder="Type steps content...." rows="4"><?php echo $showPriceContent1; ?></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="exampleTextarea1" class="col-sm-4 col-form-label">Change Price Box 2</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" id="about1" name="contentTwo" placeholder="Type steps content...." rows="4"><?php echo $showPriceContent2; ?></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="exampleTextarea1" class="col-sm-4 col-form-label">Change Price Box 3</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" id="about2" name="contentThree" placeholder="Type steps content...." rows="4"><?php echo $showPriceContent3; ?></textarea>
                    </div>
                </div>
               
                <button type="submit" name="pricing_btn" class="btn btn-primary btn-rounded btn-fw">Save Changes</button>

            </form>


        </div>

    </div>


</div>

<?php include('footer.php'); ?>


