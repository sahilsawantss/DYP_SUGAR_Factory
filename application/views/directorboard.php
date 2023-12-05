<!DOCTYPE HTML>
<html>
<?php 
include_once("template/header_link.php"); 
?>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper"> 
    <?php 
    include_once("template/header.php"); 
    include_once("sidebar.php"); 
    ?>
    <div class="content-wrapper">
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Board of Director</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                <li class="breadcrumb-item active">Board of Director</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
              
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title"><?php echo isset($directorboard->id) ? 'Edit' : 'Add'; ?>  Board of Director</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <?php echo form_open_multipart('addupdatedirectorboard','class="directorboard" id="directorboard_form"'); ?>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter name" value="<?php echo isset($directorboard->name) ? set_value("name", $directorboard->name) : set_value("name"); ?>" required>

                        <input type="hidden" class="form-control" name="id" value="<?php echo isset($directorboard->id) ? set_value("id", $directorboard->id) : set_value("id"); ?>">

                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Post</label>
                        <input type="text" class="form-control" name="post" placeholder="Enter post" value="<?php echo isset($directorboard->post) ? set_value("post", $directorboard->post) : set_value("post"); ?>" required >
                      </div>
                    </div>
                    <!--  -->
                  </div>
                  
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="directorboard_details" placeholder="Enter directorboard details"><?php echo isset($directorboard->description) ? set_value("description", $directorboard->description) : set_value("description"); ?></textarea>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" id="status" name="status">
                          <option value="">select</option>
                          <option value="1" <?php if(@$directorboard->status==1) echo 'selected="selected"'; ?>>Active</option>
                          <option value="2" <?php if(@$directorboard->status==2) echo 'selected="selected"'; ?>>Deactive</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-sm-6">
                      <label>Directorboard Image</label>
                      <div class="custom-file" style="margin-bottom: 12px;">
                      <div class="custom-file-label" for="customFile">Choose file</div>
                        <input type="file" class="custom-file-input directorboard_image" id="customFile" name="directorboard_image" > 
                      </div>
                    </div>
                    <div class="form-group col-sm-3" id="edit_image">
                       <?php echo isset($directorboard->image) ? '<img src="'.base_url('upload/directorboard/'.$directorboard->image).'" hight="100" width="100"></img>' : set_value("image"); ?>
                    </div>
                     <div class="form-group col-sm-3" id="image"></div>
                  </div>

                  

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <div class="col-md-1"></div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
  </div>
  <?php include_once("template/footer.php"); ?>
</div>
<?php 
include_once("template/footer_link.php"); 
?>
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>

<script type="text/javascript">
    function filePreview(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#image + img').remove();
            $('#image').after('<img src="'+e.target.result+'" width="100" height="100"/>');
        };
        reader.readAsDataURL(input.files[0]);
    }
}

$(".directorboard_image").change(function () {
    $("#edit_image").hide();
    filePreview(this);
});
</script>
</body>
</html>