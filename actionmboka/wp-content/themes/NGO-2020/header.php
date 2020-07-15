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
    <title>Action Mboka | <?php wp_title(''); ?></title>
    <?php wp_head();?>
</head>

<body>

    <!-- top contact area -->
    <div class="container-fluid py-1 text-white top-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <a href="mailto:" class="m-0 mt-1 top-header-link">
                        <i class="fas fa-envelope px-2"></i>
                        info@actionsmboka.com
                    </a>
                    <a href="tel:+243-814320-372" class="m-0 mt-1 top-header-link">
                        <i class="fas fa-phone fa-rotate-90 px-2"></i>
                        +243 814320 372
                    </a>
                </div>
                <div class="col-4 text-right">
                    <a href="#" class="top-header-link"><i class="fab fa-facebook-f px-2 top-header-social-icon"></i></a>
                    <a href="#" class="top-header-link"><i class="fab fa-twitter px-3 top-header-social-icon"></i></a>
                    <a href="#" class="top-header-link"><i class="fab fa-instagram px-2 top-header-social-icon"></i></a>

                    <!-- <div class="col-12">
                        <div class="row">
                            <a href="#" class="ml-auto text-white">
                                <h6 class="h6 mt-1" style="font-size: small;">Login</h6>
                            </a> 
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    
    <!-- navbar in container -->
    <div class="container-fluid" style="background-color: #03b664;">
        <div class="container">
            <!-- start navbar -->
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <a class="navbar-brand col-sm-2 col-4" href="<?php echo home_url( '/' ) ?>">
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
                            'menu_class'     => 'navbar-nav ml-auto',
                            'walker'         => new Bootstrap_NavWalker(), // This controls the display of the Bootstrap Navbar
                            'fallback_cb'    => 'Bootstrap_NavWalker::fallback', // For menu fallback
                        ))
                    ?>
                    <a href="<?php echo home_url( '/make-donation' ) ?>" class="btn btn-warning py-2 px-4 rounded-sm ml-lg-3 ml-2" style="font-size: small; font-weight: 600;">DONATE NOW</a>
                </div>
            </nav>
              <!-- end navbar -->
        </div>
    </div>

    
    
  


