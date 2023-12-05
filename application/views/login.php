<!DOCTYPE html>
<html>
<style type="text/css">
  .error{
    color: red;
  }
</style>
<?php 
  include_once("template/header_link.php"); 
?>
<body class="hold-transition login-page" style="background-image: url('<?php echo base_url();?>img/.jpg');background-repeat:no-repeat; background-position: center; background-size: cover; line-height: 2.5;">
<div class="login-box">
  <div class="login-logo">
    <a href="javascript:void(0);"></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <div class="login-logo"><b>Admin Login</b></div>
      <p class="login-box-msg" style="color: red"><?php if (!empty($msg)) echo $msg;?></p>
      <?php echo form_open('dashboard','class="login" id="login_form"'); ?>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="contact" placeholder="Contact">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
           <!--  <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div> -->
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mb-1">
        <a href="<?= base_url('forgotPassword');?>">I forgot my password</a>
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
<script src="<?php echo base_url();?>js/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url();?>js/adminlte.js"></script>

</body>
</html>