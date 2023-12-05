<!DOCTYPE html>
<html>
<?php 
  include_once("template/header_link.php"); 
?>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <!-- <a href="javascript:void(0);"><b>Admin</b>LTE</a> -->
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <br>
      <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>
      
       <?php echo form_open('updatepassword','class="fogot_password" id="fogot_password"'); ?>
        <div class="mb-3">
          <input type="contact" class="form-control" name="contact" placeholder="Contact">
         
        </div>
        <div class="mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Change password</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mt-3 mb-1">
        <a href="<?= base_url().'login';?>">Login</a>
      </p>
      <p class="mb-0">
        <a href="<?= base_url('adminsignup');?>" class="text-center">Register a new membership</a>
      </p>
      <br>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<script src="<?php echo base_url();?>js/jquery/jquery.min.js"></script>
<script src="<?php echo base_url();?>js/jquery.validate.min.js"></script>
<script src="<?php echo base_url();?>js/form_validation.js"></script>
<script src="<?php echo base_url();?>js/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url();?>js/adminlte.js"></script>
</body>
</html>