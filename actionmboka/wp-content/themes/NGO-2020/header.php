<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- bootstrap css -->
    <link href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    
    <!-- Awosome fonts icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/solid.css" integrity="sha384-VGP9aw4WtGH/uPAOseYxZ+Vz/vaTb1ehm1bwx92Fm8dTrE+3boLfF1SpAtB1z7HW" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/regular.css" integrity="sha384-ZlNfXjxAqKFWCwMwQFGhmMh3i89dWDnaFU2/VZg9CvsMGA7hXHQsPIqS+JIAmgEq" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/brands.css" integrity="sha384-rf1bqOAj3+pw6NqYrtaE1/4Se2NBwkIfeYbsFdtiR6TQz0acWiwJbv1IM/Nt/ite" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/fontawesome.css" integrity="sha384-1rquJLNOM3ijoueaaeS5m+McXPJCGdr5HcA03/VHXxcp2kX2sUrQDmFc3jR5i/C7" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>
    <?php include_once('function.php'); ?>
    <?php wp_head(); ?>
</head>
<body>
    
    <!-- top contact area -->
    <div class="container-fluid borders border-dark py-1 text-white position-relative" style="box-shadow: 0px 5px 12px 3px #0000006b; background-color: #1d2a3b;">
        <div class="container borders border-warning">
            <!-- <div class="col-lg-12 borders border-danger"> -->
                <div class="row align-items-centers">
                    <div class="col-lg-2 borders border-primary">
                        <h6 class="m-0 mt-1" style="font-size: small;">admin@admin.com</h6>
                    </div>
                    <div class="col-lg-3 borders border-primary">
                        <h6 class="m-0 mt-1" style="font-size: small;">+9200000000</h6>
                    </div>
                    <div class="col-lg-3 ml-auto pr-0s border-primary borders">
                        <div class="col-12">
                            <div class="row">
                                <i class="fab fa-facebook-f px-2 mt-2s" style="font-size: small; line-height: 2;"></i>
                                <i class="fab fa-twitter px-2" style="font-size: small; line-height: 2;"></i>
                                <i class="fab fa-instagram px-2 ml-autos" style="font-size: small; line-height: 2;"></i>
                                <a href="#" class="ml-auto text-white">
                                    <h6 class="h6 mt-1" style="font-size: small;">Login</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- </div> -->
        </div>
    </div>

    <!-- navbar in container -->
    <div class="container-fluid borders border-dark bg-dangers" style="background-color: #03b664;">
        <div class="container borders border-warning">
            <!-- start navbar -->
            <nav class="navbar navbar-expand-lg navbar-light borders border-dark px-0">
                <a class="navbar-brand borders border-primary col-2" href="#">
                    <img src="/assets/images/Action_20MBOKA-04 (1).png" class="img-fluid" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse borders border-warning" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto m-auto borders border-primary">
                    <li class="nav-item active">
                      <a class="nav-link mx-2 text-white" style="font-weight: 600; border-bottom: 2px solid #4362af;" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link mx-2 text-white" style="font-weight: 600;" href="#">Mission</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-white" style="font-weight: 600;" href="#">Objective</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-white" style="font-weight: 600;" href="#">Make Donation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-white" style="font-weight: 600;" href="#">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-white" style="font-weight: 600;" href="#">About Us</a>
                    </li>
                  </ul>
                  <form class="form-inline">
                    <button class="btn btn-warning py-2 px-4 rounded-sm" style="font-size: small; font-weight: 600;" type="submit">DONATE NOW</button>
                  </form>
                </div>

              </nav>
              <!-- end navbar -->
        </div>
    </div>