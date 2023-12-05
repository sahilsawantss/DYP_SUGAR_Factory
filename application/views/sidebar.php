<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('vdashboard');?>" class="brand-link">
     <!--  <img src="/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8"> -->
      <span class="brand-text font-weight-light" style="margin-left: 60px;";>WebiSoftech</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="<?= base_url('vdashboard');?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
           
          </li>
          <li class="nav-item">
            <a href="<?= base_url('directorboardList');?>" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Director Board
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?= base_url('achievementList');?>" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Major Achievement
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="javascript:void(0);" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Department
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('departmentCategoryList');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Department Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('departmentInformationList');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Department Information</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('awardsEventsList');?>" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Awards & Events
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('socialActivityList');?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Social Activity
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('photoGallaryList');?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Photo Gallary
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('certificateList');?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Certificate
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="<?= base_url('careerList');?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Career
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('tendarList');?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Tendar
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('financialPerformanceList');?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Financial Performance
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>