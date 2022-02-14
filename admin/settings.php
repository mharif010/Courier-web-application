<?php
include('header.php');
include('./handler/settingHandler.php');
?>
<div class="content-wrapper">

  <div class="row">
    <div class="col-sm-6 mb-4 mb-xl-0">
      <h4 class="font-weight-bold text-dark">Site settings from here.</h4><br>

      <form action="" method="POST" class="forms-sample" enctype="multipart/form-data">
        <div class="form-group row">
          <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Change Site Title</label>
          <div class="col-sm-9">
            <input type="text" name="title" class="form-control" placeholder="Site title" value="<?php echo $showTitle; ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Change Site Tagline</label>
          <div class="col-sm-9">
            <input type="text" name="tagline" class="form-control" placeholder="Site Tagline" value="<?php echo $showTagline; ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="exampleInputMobile" class="col-sm-3 col-form-label">Change Logo</label>
          <div class="col-sm-9">
            <input type="file" value="1.jpg" name="uploadfile" class="form-control file-upload-info" placeholder="Upload Image">
          </div>
        </div>

        <button type="submit" name="website_settings" class="btn btn-primary btn-rounded btn-fw">Save Changes</button>
      </form>


    </div>

  </div>


</div>
<?php include('footer.php'); ?>