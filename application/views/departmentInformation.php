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
              <h1>Department Information</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                <li class="breadcrumb-item active">Department Information</li>
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
                  <h3 class="card-title"><?php echo isset($departmentInformation->id) ? 'Edit' : 'Add'; ?>  Department Information</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <?php echo form_open_multipart('addupdateDepartmentInformation','class="departmentInformation" id="departmentInformation_form"'); ?>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter name" value="<?php echo isset($departmentInformation->name) ? set_value("name", $departmentInformation->name) : set_value("name"); ?>">

                        <input type="hidden" class="form-control" name="id" value="<?php echo isset($departmentInformation->id) ? set_value("id", $departmentInformation->id) : set_value("id"); ?>">

                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Category</label>
                        <select class="form-control" id="category_id" name="category_id">
                          <option value="">Select Category</option>
                          <?php foreach ($departmentCategory->result() as $cat ){?>
                          <option value="<?php echo $cat->id; ?>" <?php if(@$departmentInformation->category_id==$cat->id) echo 'selected="selected"'; ?>><?php echo $cat->title; ?></option>
                          <?php }?>
                        </select>
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="departmentInformation_details" placeholder="Enter Details"><?php echo isset($departmentInformation->departmentInformation_details) ? set_value("departmentInformation_details", $departmentInformation->departmentInformation_details) : set_value("departmentInformation_details"); ?></textarea>
                      </div>
                    </div>
                   
                  </div>
                  
                  <div class="row">
                    <div class="col-sm-6">
                      <label>Department Infomration Image</label>
                      <div class="custom-file" style="margin-bottom: 12px;">
                      <div class="custom-file-label" for="customFile">Choose file</div>
                        <input type="file" class="custom-file-input departmentInformation_image" id="customFile" name="departmentInformation_image"> 
                      </div>
                    </div>
                    <div class="form-group col-sm-3" id="edit_image">
                       <?php echo isset($departmentInformation->departmentInformation_image) ? '<img src="'.base_url('upload/jobdepartmentInformation/'.$departmentInformation->departmentInformation_image).'" hight="100" width="100"></img>' : set_value("departmentInformation_image"); ?>
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

$(".departmentInformation_image").change(function () {
    $("#edit_image").hide();
    filePreview(this);
});
</script>

</body>
</html>