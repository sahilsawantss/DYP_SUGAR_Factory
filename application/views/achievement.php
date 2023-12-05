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
              <h1>Major Achievement</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                <li class="breadcrumb-item active">Major Achievement</li>
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
                  <h3 class="card-title"><?php echo isset($achievement->id) ? 'Edit' : 'Add'; ?> Major Achievement</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <?php echo form_open_multipart('addupdateAchievement','class="achievement" id="achievement_form"'); ?>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter title" value="<?php echo isset($achievement->title) ? set_value("name", $achievement->title) : set_value("title"); ?>">

                        <input type="hidden" class="form-control" name="id" value="<?php echo isset($achievement->id) ? set_value("id", $achievement->id) : set_value("id"); ?>">

                      </div>
                    </div>
                    
                  </div>
                  
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="achievement_details" placeholder="Enter achievement Details"><?php echo isset($achievement->description) ? set_value("achievement_details", $achievement->description) : set_value("achievement_details"); ?></textarea>
                      </div>
                    </div>
                    <!-- <div class="col-sm-6">
                      <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" id="status" name="status">
                          <option value="">select</option>
                          <option value="1" <?php if(@$achievement->status==1) echo 'selected="selected"'; ?>>Active</option>
                          <option value="2" <?php if(@$achievement->status==2) echo 'selected="selected"'; ?>>Deactive</option>
                        </select>
                      </div>
                    </div> -->
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

</body>
</html>