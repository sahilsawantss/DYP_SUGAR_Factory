<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="javascript:void(0);"><i class="fas fa-bars"></i></a>
      </li>
     
    </ul>


    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

   

    <ul class="navbar-nav ml-auto">
      <ul class="nav navbar-nav ml-auto">
        <li class="nav-item dropdown">
          
          <?php
            $adminname=$this->session->userdata('admin_name');
            if($adminname==''){
              return redirect(base_url().'login');
            }
          ?>
          <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-toggle="dropdown"><?php echo $adminname; ?></a>
          <input type="hidden" id="header_full_name" value="<?php echo $adminname; ?>">
          <div class="dropdown-menu dropdown-menu-right">
            <a href="javascript:void(0);" class="dropdown-item">Reports</a>
            <a href="javascript:void(0);" class="dropdown-item">Settings</a>
            <div class="dropdown-divider"></div>
            <a href="<?= base_url().'login';?>" class="dropdown-item">Logout</a>
          </div>
        </li>
      </ul>
    </ul>
  </nav>