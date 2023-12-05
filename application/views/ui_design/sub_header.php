<?php

$controller = $this->router->fetch_class();

switch ($controller) {

    case 'AboutController': 
          $page = "About Us";
        # code...
        break;

    case 'DepartmentController': 
          $page = "Department";
        # code...
        break;

    case 'PortfolioController': 
          $page = "Portfolio";
        # code...
        break;

    case 'TenderController': 
          $page = "Tender";
        # code...
        break;

    case 'FinancialController': 
          $page = "Financial Performance";
        # code...
        break;

    case 'CareerController': 
          $page = "Career";
        # code...
        break;

    case 'ContactController': 
          $page = "Contacts";
        # code...
        break;
    
    default:
        # code...
        break;
}
?>

  <section class="page-cover darkOverlay sectionPT sectionPB text-center" style="background-image: url(<?php echo base_url();?>resources/img/cover/header11.jpg);">
            <div class="col-center text-center col-md-8 col-lg-7">
              
                <h4 class="heading text-color-white1 mt10 mb20"><?php echo $page; ?></h4>
                <ul class="breadcrumb">
                    <li class="text-color-white1"><a href="<?php echo base_url(); ?>">Home</a></li>
                    <li class="active text-color-white1"><?php echo $page; ?></li>
                </ul>
            </div>
        </section>