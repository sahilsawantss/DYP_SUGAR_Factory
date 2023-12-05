<header class="navik-header header-dark header-shadow">
            <div class="container">

                <!-- Navik header -->
                <div class="navik-header-container">
                    
                    <!--Logo-->
                    <div class="logo" data-mobile-logo="<?php echo base_url();?>resources/img/logo/logo-light.png" data-sticky-logo="<?php echo base_url();?>resources/img/logo/logo-light.png">
                        <a href="index.html"><img src="<?php echo base_url();?>resources/img/logo/logo-light.png" alt="logo"/></a>
                    </div>
                    
                    <!-- Burger menu -->
                    <div class="burger-menu">
                        <div class="line-menu line-half first-line"></div>
                        <div class="line-menu"></div>
                        <div class="line-menu line-half last-line"></div>
                    </div>

                    <!-- Start Atribute Navigation -->
                  <!--   <div class="attr-nav search">
                        <a href="#"><i class="fas fa-search"></i></a>
                    </div>       -->
                    <!-- End Atribute Navigation -->

                    <!-- Start Top Search -->
                    <div class="top-search">
                        <form action="#">
                            <input type="text" class="form-control" placeholder="Search">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </form>
                        <span class="input-group-addon close-search"><i class="ti-close"></i></span>
                    </div>
                    <!-- End Top Search -->

                    <!--Navigation menu-->
                    <nav class="navik-menu menu-caret">
                        <ul>
                            
                             <?php if($this->router->fetch_class() == "welcome"){
                                    ?><li class="mega-menu current-menu"><?php }else{ ?><li><?php } ?>

                                <a href="<?php echo base_url();?>">Home</a>

                            </li>
                            <?php if($this->router->fetch_class() == "AboutController"){
                                    ?><li class="mega-menu current-menu"><?php }else{ ?><li><?php } ?>
                                    <a href="<?php echo base_url();?>about">About Us</a></li>

                             <?php if($this->router->fetch_class() == "DepartmentController"){
                                    ?><li class="current-menu"><?php }else{ ?><li><?php } ?>
                                    <a href="#">Department</a>

                                        <ul>
                                            <?php
                                            foreach ($department_category->result() as $row) {?>
                                                <li><a href="<?php echo base_url().'department/'.$row->id; ?>"><?php echo $row->title; ?></a></li>
                                            <?php } ?>
                                            
                                        </ul>

                            </li>
                            
                             <?php if($this->router->fetch_class() == "PortfolioController"){
                                    ?><li class="mega-menu current-menu"><?php }else{ ?><li><?php } ?>
                                    <a href="<?php echo base_url();?>portfolio">Portfolio</a></li>

                             <?php if($this->router->fetch_class() == "TenderController"){
                                    ?><li class="mega-menu current-menu"><?php }else{ ?><li><?php } ?>
                                    <a href="<?php echo base_url();?>tender">Tender</a></li>

                             <?php if($this->router->fetch_class() == "FinancialController"){
                                    ?><li class="mega-menu current-menu"><?php }else{ ?><li><?php } ?>
                                    <a href="<?php echo base_url();?>financial_performance">Financial Performance</a></li>

                             <?php if($this->router->fetch_class() == "CareerController"){
                                    ?><li class="mega-menu current-menu"><?php }else{ ?><li><?php } ?>
                                    <a href="<?php echo base_url();?>careers">Career</a></li>

                            <?php if($this->router->fetch_class() == "ContactController"){
                                    ?><li class="mega-menu current-menu"><?php }else{ ?><li><?php } ?>
                                    <a href="<?php echo base_url();?>contact">Contact</a></li>
                        </ul>
                    </nav>

                </div>

            </div>
        </header>