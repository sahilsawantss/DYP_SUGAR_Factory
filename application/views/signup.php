<!DOCTYPE html>
<html>
<?php 
  include_once("template/header_link.php"); 
?>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <!-- <a href="javascript:void(0);"><b>Admin</b>LTE</a> -->
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new membership</p>

      <?php echo form_open('addadmin','class="signup" id="signup_form"'); ?>
        <div class="mb-3">
          <input type="text" class="form-control" name="firstname" id="firstname" placeholder="FirstName">
          <div id="firstname"></div>
        </div>
        <div class="mb-3">
          <input type="text" class="form-control" name="lastname" id="lastname" placeholder="LastName">
         
          <div id="lastname"></div>
        </div>
        <div class="mb-3">
          <input type="text" class="form-control" name="contact" id="contact" placeholder="Contact">
          
          <div id="contact"></div>
        </div>
        <div class="mb-3">
          <input type="password" class="form-control" name="password" id="password" placeholder="Password">
          <div id="password"></div>
        </div>
        <div class="row">
          <div class="col-8">
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <br>
      <a href="<?php echo base_url().'login';?>" class="text-center">I already have a membership</a>
      <br><br>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<script src="<?php echo base_url();?>js/jquery/jquery.min.js"></script>
<script src="<?php echo base_url();?>js/jquery.validate.min.js"></script>
<script src="<?php echo base_url();?>js/form_validation.js"></script>
<script src="<?php echo base_url();?>js/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url();?>js/adminlte.js"></script>
</body>
</html>