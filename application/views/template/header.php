<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Famstraveller</title>
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/images/favicon.png">

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Seo meta tags for Search Engine Optimization -->
        <meta name="author" content="Famstraveller">
        <meta name="description" content="Travel agency template for all types of tour agencies, travel bloggers, boostrap 4 based template">
        <meta name="keywords" content="Famstraveller, Famstraveller, travel agency, themeforest tour agency, travel, adventure, destinations,">

        <!-- Bootstrap and Jquery scripts -->
        <script src="<?php echo base_url() ?>js/jquery-3.1.1.min.js"></script>
        <script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>js/popper.min.js"></script>

        <!-- Aditional scripts -->
        <script src="<?php echo base_url() ?>js/jquery.magnific-popup.min.js"></script>
        <script src="<?php echo base_url() ?>js/smooth-scroll.min.js"></script>
        <script src="<?php echo base_url() ?>js/instafeed.min.js"></script>
        <script src="<?php echo base_url() ?>js/ofi.js"></script>

        <!-- Main scripts -->
        <script src="<?php echo base_url() ?>js/main.js"></script>

        <!-- Stylesheets -->
        <link rel="stylesheet" href="<?php echo base_url() ?>css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>css/custom_bootstrap.css" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo base_url() ?>css/font-awesome-animation.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>css/magnific-popup.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>css/style.css" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url() ?>css/custom_style.css" type="text/css">
    </head>

   <body class="homeflat home home2">

    <!-- navbar -->
    <div id="wrapper-navbar">
        <nav id="top" class="navbar py-3 fixed-top navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand ml-sm-5" href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>assets/images/logo.png" alt="image"></a>
            <button class="navbar-toggler collapsed navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar top-bar"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar"></span>
                <span class="sr-only">Toggle navigation</span>
            </button> 
            <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link  mr-3 open my-lg-0 my-2 ml-lg-0 ml-3" href="<?php echo base_url() ?>" >
                                Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle mr-3 open my-lg-0 my-2 ml-lg-0 ml-3" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Destinations
                        </a>
                        <div class="dropdown-menu dropdownId dropdown-menu-right" aria-labelledby="navbarDropdown2">                      
                            <a class="dropdown-item mt-1" href="#">Asia</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Eropa</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item mb-1" href="#">Indonesia</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link mr-3 open my-lg-0 my-2 ml-lg-0 ml-3" href="<?php echo base_url('Gallery') ?>">
                        Gallery
                        </a>
                        <!-- <div class="dropdown-menu dropdownId dropdown-menu-right" aria-labelledby="navbarDropdown2">                      
                            <a class="dropdown-item mt-1" href="#">Photos</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Videos</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item mb-1" href="#">Vlogs</a>
                        </div> -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-lg-0 ml-3 mr-4 my-lg-0 my-2 lastitem" href="<?php echo base_url('faq') ?>" >
                            FAQs
                        </a>
                    </li>
                    <a href="<?php echo base_url() ?>" class="btn btn-primary ml-lg-0 ml-3 mr-4 my-lg-0 my-2 lastitem">Book Now</a>

                </ul>                       
                </div>
            </div>        
        </nav>
    </div>
