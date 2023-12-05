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
              <h1>Financial Performance</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                <li class="breadcrumb-item active">Financial Performance</li>
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
                  <h3 class="card-title"><?php echo isset($financialPerformance->id) ? 'Edit' : 'Add'; ?>Financial Performance</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <?php echo form_open_multipart('addupdateFinancialPerformance','class="FinancialPerformance" id="FinancialPerformance_form"'); ?>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Net revenue</label>
                        <input type="text" class="form-control" name="net_revenue" placeholder="Enter Net Revenue" value="<?php echo isset($financialPerformance->net_revenue) ? set_value("name", $financialPerformance->net_revenue) : set_value("net_revenue"); ?>" required>

                        <input type="hidden" class="form-control" name="id" value="<?php echo isset($financialPerformance->id) ? set_value("id", $financialPerformance->id) : set_value("id"); ?>">

                      </div>
                    </div>

                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Expences</label>
                        <input type="text" class="form-control" name="expences" placeholder="Enter Expences" value="<?php echo isset($financialPerformance->expences) ? set_value("expences", $financialPerformance->expences) : set_value("expences"); ?>" required>
                      </div>
                    </div>
                    
                  </div>
                  
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>EBICD</label>
                        <input type="text" class="form-control" name="EBICD" placeholder="Enter EBICD" value="<?php echo isset($financialPerformance->EBICD) ? set_value("EBICD", $financialPerformance->EBICD) : set_value("EBICD"); ?>" required>
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Interest Determination</label>
                        <input type="text" class="form-control" name="interest_Determination" placeholder="Enter Interest Determination" value="<?php echo isset($financialPerformance->interest_Determination) ? set_value("interest_Determination", $financialPerformance->interest_Determination) : set_value("interest_Determination"); ?>" required>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Provision of Tax</label>
                        <input type="text" class="form-control" name="provision_of_tax" placeholder="Enter Provision of Tax" value="<?php echo isset($financialPerformance->provision_of_tax) ? set_value("provision_of_tax", $financialPerformance->provision_of_tax) : set_value("provision_of_tax"); ?>" required>
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Networth</label>
                        <input type="text" class="form-control" name="networth" placeholder="Enter Networth" value="<?php echo isset($financialPerformance->networth) ? set_value("networth", $financialPerformance->networth) : set_value("networth"); ?>" required>
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>FRP</label>
                        <input type="text" class="form-control" name="ERP" placeholder="Enter ERP" value="<?php echo isset($financialPerformance->ERP) ? set_value("ERP", $financialPerformance->ERP) : set_value("ERP"); ?>" required>
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Cane Price</label>
                        <input type="text" class="form-control" name="cane_price" placeholder="Enter Cane Price" value="<?php echo isset($financialPerformance->cane_price) ? set_value("cane_price", $financialPerformance->cane_price) : set_value("cane_price"); ?>" required>
                      </div>
                    </div>
                  </div>           

                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Year</label>
                        <input type="text" class="form-control" name="year" placeholder="Enter Year" value="<?php echo isset($financialPerformance->year) ? set_value("year", $financialPerformance->year) : set_value("year"); ?>" required>
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

</body>
</html>