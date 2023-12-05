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
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Department Information List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
              <li class="breadcrumb-item active">Department Information List</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
      
    </section>
    <section class="content">
      <div class="row">
        <div class="col-9"></div>
        <div class="col-3" >
          <button class="btn btn-block btn-primary"><a style="color:white"; href="<?= base_url('departmentInformation');?>" >Add Department Information</a></button>
        </div>
      </div>
    </section></br>
   <section class="content">
      <div class="row">
        <div class="col-12">
           <div class="card">
          <!--   <div class="card-header">
              <h3 class="card-title">DataTable with default features</h3>
            </div> -->
            <!-- /.card-header -->
            <div class="card-body">
              <table id="user_list" class="table table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Information</th>
                  <th>Created Date/Time</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                  $i=1;
               foreach($departmentInformation->result() as $rows){ ?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $rows->title; ?></td>
                  <td><?php echo $rows->description; ?></td>
                  <td><?php echo $rows->cat_title; ?></td>
                  <td><?php echo date("d-m-Y h:i", strtotime($rows->datetime)); ?></td>
                  <td>
                    <a class='btn btn-primary btn-sm' href="<?php echo base_url('editDepartmentInformation/'.$rows->id);?>"  title='Edit Department Information'><i class='nav-icon fas fa-edit'></i></a>
                    <a class='btn btn-danger btn-sm' href="javascript:void(0);" onclick="deleteDepartmentInformation(<?php echo $rows->id; ?>)" title='Delete Department Information'><i class='nav-icon fas fa-trash'></i>
                    </a>
                  </td>
                </tr>
              <?php $i++; }
                ?>
                </tbody>
                <tfoot>
              
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    </div>
  <?php include_once("template/footer.php"); ?>
</div>
  <?php 
    include_once("template/footer_link.php"); 
  ?>
  <script>
  $(function () {
    $("#user_list").DataTable();

  });

 
</script>
<script>
  var deleteDepartmentInformation = function (id) {
    console.log(id);
    var base_url = "<?php echo base_url();?>";
    bootbox.confirm({
      message: "Are you sure, Do you want to delete record ?",
      buttons: {
        confirm: {
          label: 'Yes',
          className: 'btn btn-sucess'
        },
        cancel: {
          label: 'No',
          className: 'btn btn-sucess'
        }
      },

      callback: function (result) {
        if (result) {
          $.ajax({
            url :  base_url+'DepartmentInformation/deleteDepartmentInformation/'+id,
            type : 'GET',
            success:function(data)
            {
              window.setTimeout(function(){location.reload()},1500)
            }
          })
        }
      }

    }); 
  }
</script>
</body>
</html>