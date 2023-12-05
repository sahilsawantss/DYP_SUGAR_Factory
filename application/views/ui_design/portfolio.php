<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- Title -->
    <title>Home Page</title>

    <!-- Meta -->
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
    <meta name="description" content="The support pillar of our sugar factory and the former governor of Bihar state Hon. Padmashri Dr. d. Y. The factory has always tried to carry out progressive works successfully by facing the most adverse conditions, keeping in view the constant original thinking of Mr. Patil and his idealistic guidance. Our sugar factory is known as a factory in the hilly and high rainfall area of Gaganbawda taluka of Kolhapur district.">
    <meta name="keywords" content="D. Y. Patil Sugar Factory, Kolhapur, Maharashtra, Sugar Factory, Sugar, Ithanol Plant ">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:type" content="D. Y. Patil Sugar Factory" />
    <meta property="og:title" content="D. Y. Patil Sugar Factory, Kolhapur" />
    <meta property="og:description" content="The support pillar of our sugar factory and the former governor of Bihar state Hon. Padmashri Dr. d. Y. The factory has always tried to carry out progressive works successfully by facing the most adverse conditions, keeping in view the constant original thinking of Mr. Patil and his idealistic guidance. Our sugar factory is known as a factory in the hilly and high rainfall area of Gaganbawda taluka of Kolhapur district." />
    <meta property="og:image" content="http://dypsugar.com/resources/img/logo/logo-light.png" />
    <meta property="og:url" content="http://dypsugar.com" />
    <meta property="og:site_name" content="D. Y. Patil Sugar Factory, Kolhapur, Maharashtra" />
    <meta name="robots" content="index, follow">

    <!-- Stylesheets
    ============================================= -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url();?>resources/css/bootstrap.min.css">

    <!-- Fontawesome -->
    <link href="<?php echo base_url();?>resources/css/fonts/fontawesome/css/all.css" rel="stylesheet">    

    <!-- Themify font icon -->
    <link href="<?php echo base_url();?>resources/css/themify-icons.css" rel="stylesheet">

    <!-- Animate css -->
    <link rel="stylesheet" href="<?php echo base_url();?>resources/css/animate.css">

    <!-- Navik menu css -->
    <link href="<?php echo base_url();?>resources/css/navik.menu.css" rel="stylesheet">

    <!-- Justified Gallery -->
    <link rel="stylesheet" href="<?php echo base_url();?>resources/css/justifiedGallery.min.css">

    <!-- Line progressbar css -->
    <link rel="stylesheet" href="<?php echo base_url();?>resources/css/jquery.lineProgressbar.css">

    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="<?php echo base_url();?>resources/css/magnific-popup.css">

    <!-- Owl carouser -->
    <link rel="stylesheet" href="<?php echo base_url();?>resources/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>resources/css/owl.theme.default.min.css">

    <!-- Lightslider -->
    <link rel="stylesheet" href="<?php echo base_url();?>resources/css/lightslider.min.css">

    <!-- Modal Video -->
    <link rel="stylesheet" href="<?php echo base_url();?>resources/css/modal-video.min.css">

    <!-- Main Css Files -->
    <link rel="stylesheet" href="<?php echo base_url();?>resources/css/element.css">
    <link rel="stylesheet" href="<?php echo base_url();?>resources/css/style.css">

</head>
<body>

    <!-- Document Wrapper
    =========================-->
    
    <div id="wrapper">
        <!-- Start Header -->
<?php
include_once("header.php");
include_once("sub_header.php");?>
        <!-- End Page Cover -->

        <!-- Start Section -->
        
        <!-- End Section -->

        <section class="lightbox-gallery sectionPT sectionPB bg-color-light1">
            <div class="container">
               
                <div class="row">

                    <?php foreach($photo_gallary->result() as $row){ ?>

                         <div class="col-md-4 padding0">
                        <a class="image-popup-vertical-fit img_area" href="<?php echo base_url(); ?>upload/photoGallary/<?php echo $row->image; ?>" title="9.jpg">

                <img src="<?php echo base_url();?>upload/photoGallary/<?php echo $row->image; ?>" class="image" alt="Image"/>

                            <div class="icon_area">
                                <span class="ti-plus icon"></span>
                            </div>
                        </a>
                    </div>

                    <?php  } ?>
                   
                </div>
            </div>
        </section>
        <!-- Start Feature Section -->

        <!-- Footer -->
        <?php
            include_once("footer.php");
       ?>
        <!-- End Footer -->

        <!-- Scroll to top -->
        <a class="scrollTopButton" href="#."><i class='ti-arrow-up'></i></a>

    </div>

    <!-- End Document Wrapper
    =========================-->

    <!-- Scripts
    ============================================= -->

    <!-- jQuery library -->
    <script type="text/javascript" src="<?php echo base_url();?>resources/js/jquery.min.js"></script>

    <!-- Bootstrap Script -->
    <script type="text/javascript" src="<?php echo base_url();?>resources/js/bootstrap.bundle.min.js"></script>

    <!-- Navik menu Script -->
    <script type="text/javascript" src="<?php echo base_url();?>resources/js/navik.menu.js"></script>

    <!-- Parallax Script -->
    <script type="text/javascript" src="<?php echo base_url();?>resources/js/parallaxie.js"></script>

    <!-- Appear Js -->
    <script type="text/javascript" src="<?php echo base_url();?>resources/js/jquery.appear.js"></script>

    <!-- Counter -->
    <script type="text/javascript" src="<?php echo base_url();?>resources/js/jQuerySimpleCounter.js"></script>
    
    <!-- Justified Gallery -->
    <script type="text/javascript" src="<?php echo base_url();?>resources/js/jquery.justifiedGallery.min.js"></script>
    
    <!-- Wow js -->
    <script type="text/javascript" src="<?php echo base_url();?>resources/js/wow.min.js"></script>

    <!-- Light Slider -->
    <script type="text/javascript" src="<?php echo base_url();?>resources/js/lightslider.min.js"></script> 

    <!-- Isotope Script -->
    <script type="text/javascript" src='<?php echo base_url();?>resources/js/isotope.pkgd.js'></script>
    <script type="text/javascript" src="<?php echo base_url();?>resources/js/imagesloaded.pkgd.js"></script>

    <!-- lineProgressbar plugin js -->
    <script type="text/javascript" src="<?php echo base_url();?>resources/js/jquery.lineProgressbar.js"></script>

    <!-- Circle progress -->
    <script type="text/javascript" src="<?php echo base_url();?>resources/js/circle-progress.min.js"></script>

    <!-- Magnific Popup core JS file -->
    <script type="text/javascript" src="<?php echo base_url();?>resources/js/jquery.magnific-popup.min.js"></script>

    <!-- Owl carouser -->
    <script type="text/javascript" src="<?php echo base_url();?>resources/js/owl.carousel.min.js"></script>
    
    <!-- Modal Video -->
    <script type="text/javascript" src="<?php echo base_url();?>resources/js/jquery-modal-video.min.js"></script>

    <!-- Point Parallax -->
    <script type="text/javascript" src="<?php echo base_url();?>resources/js/jquery.pointparallax.min.js"></script>

    <!-- Type Js -->
    <script type="text/javascript" src="<?php echo base_url();?>resources/js/typed.min.js"></script>

    <!-- TweenMax Script -->
    <script type="text/javascript" src="<?php echo base_url();?>resources/js/TweenMax.min.js"></script>

    <!-- Touch Swipe -->
    <script type="text/javascript" src="<?php echo base_url();?>resources/js/jquery.touchSwipe.min.js"></script>

    <!-- Main Script -->
    <script type="text/javascript" src="<?php echo base_url();?>resources/js/script.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-139847600-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-139847600-1');
    </script>

</body>
</html>