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
              <h1>Tendar</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                <li class="breadcrumb-item active">Tendar</li>
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
                  <h3 class="card-title"><?php echo isset($tendar->id) ? 'Edit' : 'Add'; ?>  Tendar</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <?php echo form_open_multipart('addupdateTendar','class="tendar" id="tendar_form"'); ?>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Enter title" value="<?php echo isset($tendar->title) ? set_value("title", $tendar->title) : set_value("title"); ?>">

                        <input type="hidden" class="form-control" name="id" value="<?php echo isset($tendar->id) ? set_value("id", $tendar->id) : set_value("id"); ?>">

                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="description" placeholder="Enter Tendar Details"><?php echo isset($tendar->description) ? set_value("description", $tendar->description) : set_value("description"); ?></textarea>
                      </div>
                    </div>
                    <!--  -->
                  </div>
                  
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Start Date</label>
                        <input type="date" class="form-control" name="start_date" placeholder="Enter start date" value="<?php echo isset($tendar->start_date) ? set_value("start_date", $tendar->start_date) : set_value("start_date"); ?>">
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>End Date</label>
                        <input type="date" class="form-control" name="end_date" placeholder="Enter end date" value="<?php echo isset($tendar->end_date) ? set_value("end_date", $tendar->end_date) : set_value("end_date"); ?>">
                      </div>
                    </div>
                   
                  </div>
                  
                  <div class="row">
                    <div class="col-sm-6">
                      <label>tendar PDF</label>
                      <div class="custom-file" style="margin-bottom: 12px;">
                      <div class="custom-file-label" for="customFile">Choose file</div>
                        <input type="file" class="custom-file-input tendar_pdf" id="customFile" name="tendar_pdf"> 
                      </div>
                    </div>
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

</body>
</html>