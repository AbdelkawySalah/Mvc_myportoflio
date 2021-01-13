<?php require("header.php") ?>


    <!-- Portfolio Section-->
    <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Portfolio</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row">
                    <!-- Portfolio Item 1-->
                    <?php foreach($articleData as $ardata): ?>
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioMod<?=  $ardata['id'];   ?>">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid"  src="<?=  Domain_Path;  ?>images/<?=  $ardata['arimg'];   ?>" alt="<?=  $ardata['arimg'];   ?>" />
                        </div>
                    </div>
                    <?php endforeach ?>

                </div>
            </div>
        </section>
        <!-- About Section-->
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-4 ml-auto">
                     <p class="lead">
                       Junior FullStack Developer PHP

                       <h3>Front End with</h3>
                       <ul>
                       <li>
                          html
                       </li> 
                       <li>
                          Css
                       </li> 
                       <li>
                          JavaScript
                       </li> 
                       <li>
                          Jqury
                       </li> 
                       <li>
                          Bootstrap
                       </li> 
                       <li>
                          Angular 9
                       </li> 
                       </ul>
                       <h3>back End with</h3>
                       <ul>
                       <li>
                          Php
                       </li> 
                       <li>
                          Php with Mvc
                       </li> 
                       <li>
                          Laravel Framwork
                       </li> 
                       <li>
                          RestFul api
                       </li> 
                       <li>
                          Mysql
                       </li> 
                       </ul>

                    </p>
                 </div>
                    <div class="col-lg-4 mr-auto">
                    <p class="lead">
                    Senior Dotnet Developer 
                         <ul>
                          <li>
                            Aspnet With C#
                          </li> 
                          <li>
                            Aspnet with VB
                          </li> 
                          <li>
                            SqlServer Database
                          </li> 
                        </ul>
 
                    </p>
                    </div>
                </div>
                <!-- About Section Button-->
                <div class="text-center mt-4">
                    <a class="btn btn-xl btn-outline-light" href="https://startbootstrap.com/themes/freelancer/">
                        <i class="fas fa-download mr-2"></i>
                        Free Download!
                    </a>
                </div>
            </div>
        </section>
        <!-- Contact Section-->
        <section class="page-section portfolio" id="certifieds">
           <div class="container">
                 <!-- Portfolio Section Heading-->
                 <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">my certificats`</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row">
                    <!-- Portfolio Item 1-->
                    <?php foreach($certfdata as $certf): ?>
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#CertfiMod<?=  $certf['id'];   ?>">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid"  src="<?=  Domain_Path;  ?>images/<?=  $certf['cert_img'];   ?>" alt="<?=  $certf['cert_img'];   ?>" />
                        </div>
                    </div>
                    <?php endforeach ?>

                </div>
            </div>
        </section>

     
  




<?php require("footer.php") ?>



