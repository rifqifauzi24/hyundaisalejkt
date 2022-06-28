<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title><?php echo  $nama; ?></title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url() ?>assets/css/modern-business.css" rel="stylesheet" />
  <link href="<?php echo base_url() ?>assets/css/index.css" rel="stylesheet" />
  <link rel="shorcut icon" href="<?php echo base_url() ?>assets/img/logohyundaihitamm.png">
  <style>
    body {
      font-family: cursive;
    }
  </style>
</head>

<body>
  <!-- Navigation -->
  <nav id="nav" class="navbar fixed-top navbar-expand-lg navbar-dark fixed-top">

    <a style="font-family: cursive; font-size: 20px;" class="navbar-brand" href="<?php echo base_url() ?>"> <img style="margin-right:10px ;" src="<?php echo base_url() ?>assets/img/logohyundai12.png" width="55" height="40">Hyundai Sale</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div style="margin-right: 40px;" class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url() ?>" style="font-size: 15px;">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 15px;">
            Products
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
            <a class="dropdown-item" style="font-size: 14px;" href="<?php echo base_url(); ?>creta">Creta</a>
            <a class="dropdown-item" style="font-size: 14px;" href="<?php echo base_url(); ?>santa">Santa FE</a>
            <a class="dropdown-item" style="font-size: 14px;" href="<?php echo base_url(); ?>palisade">Palisade</a>
            <a class="dropdown-item" style="font-size: 14px;" href="<?php echo base_url(); ?>staria">Staria</a>
            <a class="dropdown-item" style="font-size: 14px;" href="<?php echo base_url(); ?>kona">Kona</a>
            <a class=" dropdown-item" style="font-size: 14px;" href="<?php echo base_url(); ?>ioniq">Ioniq 5</a>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>gallery" style="font-size: 15px;">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://api.whatsapp.com/send?phone=6285772542033" style="font-size: 15px;">Test Drive</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>home/#contact" style="font-size: 15px;">Contact</a>
        </li>
      </ul>
    </div>

  </nav>