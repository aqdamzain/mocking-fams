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
            <a class="navbar-brand ml-sm-5" href="<?php echo base_url('Admin') ?>"><img src="<?php echo base_url() ?>assets/images/logo.png" alt="image"></a>
            <button class="navbar-toggler collapsed navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar top-bar"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar"></span>
                <span class="sr-only">Toggle navigation</span>
            </button> 
            <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link  mr-3 open my-lg-0 my-2 ml-lg-0 ml-3" href="<?php echo base_url('Admin') ?>">
                                Home
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link  mr-3 open my-lg-0 my-2 ml-lg-0 ml-3" href="<?php echo base_url() ?>admin/list_destinasi" >
                        Destinations
                        </a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link mr-3 open my-lg-0 my-2 ml-lg-0 ml-3" href="<?php echo base_url('admin/viewGallery') ?>">
                        Gallery
                        </a>
                    </li>

                    <!-- <li class="nav-item">
                        <a class="nav-link ml-lg-0 ml-3 mr-4 my-lg-0 my-2 lastitem" href="#" >
                            About Us
                        </a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link ml-lg-0 ml-3 mr-4 my-lg-0 my-2 lastitem" href="<?php echo base_url('admin/faq') ?>">
                            FAQs
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle dropdown-menu-right  ml-lg-0 ml-3 mr-4 my-lg-0 my-2 lastitem" href="#" id="navbarDropdown6" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Akun
                        </a>
                        <div class="dropdown-divider d-lg-none"></div>
                        <div class="dropdown-menu dropdownId dropdown-menu-right" aria-labelledby="navbarDropdown6">
                        <a class="dropdown-item btn btn-danger px-3 btn-sm float-left ml-1" href="<?php echo base_url('admin/editPassword')?>" data-id = "1" 
                                    role="button">Ubah Password</a>        
                            <a class="dropdown-item btn btn-danger px-3 btn-sm float-left ml-1" href="<?php echo base_url('login/logout')?>" 
                                    role="button">Log Out</a>
                        </div>
                    </li>
                </ul>                       
                </div>
            </div>        
        </nav>
    </div>

<!-- Modal edit Akun-->
<div class="modal fade" id="modaleditAkun" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content container formhome2">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Akun</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

        <form id="formeditQuestions" method="post" action="<?php echo base_url('admin/editPassword') ?>" enctype="multipart/form-data">
        <div class="row form-group">
          <div class="col-md-12 mb-3 mb-md-0">
            <label class="text-black col-form-label" for="email">Email</label>
            <input type="hidden" id="id_akun" name="id_akun" class="form-control" value=""> 
            <input type="email" name="email" id="email" class="form-control" 
                placeholder="Masukkan Kembali Email.."></input> 
          </div>
        </div>
        <div class="row form-group">
          <div class="col-md-12 mb-3 mb-md-0">
            <label class="text-black col-form-label" for="password">Password Saat Ini</label> 
            <input type="password" name="password" id="password" class="form-control" 
            placeholder="Masukkan Password Saat ini.."></input> 
          </div>
        </div>
        <div class="row form-group">
          <div class="col-md-12 mb-3 mb-md-0">
            <label class="text-black col-form-label" for="passwordbaru">Password Baru</label> 
            <input type="password" name="passwordbaru" id="passwordbaru" class="form-control" 
            placeholder="Masukkan Password Baru.."></input> 
          </div>
        </div>
          <div class="row justify-content-center mb-3 mt-3">
          <button type="submit" class="btn btn-success">Ubah</button>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>