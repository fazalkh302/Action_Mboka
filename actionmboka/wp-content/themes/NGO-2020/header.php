<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <!-- bootstrap css -->
    <link href="<?php bloginfo('template_url');?>/assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

    <!-- Awosome fonts icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/solid.css"
        integrity="sha384-VGP9aw4WtGH/uPAOseYxZ+Vz/vaTb1ehm1bwx92Fm8dTrE+3boLfF1SpAtB1z7HW" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/regular.css"
        integrity="sha384-ZlNfXjxAqKFWCwMwQFGhmMh3i89dWDnaFU2/VZg9CvsMGA7hXHQsPIqS+JIAmgEq" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/brands.css"
        integrity="sha384-rf1bqOAj3+pw6NqYrtaE1/4Se2NBwkIfeYbsFdtiR6TQz0acWiwJbv1IM/Nt/ite" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/fontawesome.css"
        integrity="sha384-1rquJLNOM3ijoueaaeS5m+McXPJCGdr5HcA03/VHXxcp2kX2sUrQDmFc3jR5i/C7" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name');?> | <?php wp_title();?></title>
    <?php wp_head();?>
</head>

<body>

    <!-- top contact area -->
    <div class="container-fluid py-1 text-white top-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <h6 class="m-0 mt-1" style="font-size: small;">admin@admin.com</h6>
                </div>
                <div class="col-lg-3">
                    <h6 class="m-0 mt-1" style="font-size: small;">+9200000000</h6>
                </div>
                <div class="col-lg-3 ml-auto">
                    <div class="col-12">
                        <div class="row">
                            <a href="#"><i class="fab fa-facebook-f px-2 header-social-icon"></i></a>
                            <a href="#"><i class="fab fa-twitter px-3 header-social-icon"></i></a>
                            <a href="#"><i class="fab fa-instagram px-2 header-social-icon"></i></a>
                            <a href="#" class="ml-auto text-white">
                                <h6 class="h6 mt-1" style="font-size: small;">Login</h6>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- navbar in container -->
    <div class="container-fluid" style="background-color: #03b664;">
        <div class="container">
            <!-- start navbar -->
            <nav class="navbar navbar-expand-lg navbar-light px-0">
                <a class="navbar-brand col-2" href="#">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/logo.png" class="img-fluid" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary', // Defined when registering the menu
                            'menu_id'        => 'primary-menu',
                            'container'      => false,
                            'depth'          => 2,
                            'menu_class'     => 'navbar-nav m-auto',
                            'walker'         => new Bootstrap_NavWalker(), // This controls the display of the Bootstrap Navbar
                            'fallback_cb'    => 'Bootstrap_NavWalker::fallback', // For menu fallback
                        ))
                    ?>
                    <form class="form-inline">
                        <button class="btn btn-warning py-2 px-4 rounded-sm" style="font-size: small; font-weight: 600;" type="submit">DONATE NOW</button>
                    </form>
                </div>
            </nav>
              <!-- end navbar -->
        </div>
    </div>

    
    
  


