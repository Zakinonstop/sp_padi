<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- ===============================================-->
  <!--    Document Title-->
  <!-- ===============================================-->
  <title>Sistem Pakar Tanaman Padi</title>


  <!-- ===============================================-->
  <!--    Favicons-->
  <!-- ===============================================-->
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('assets/user/img/favicons/apple-touch-icon.png'); ?>">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url('assets/user/img/favicons/favicon-32x32.png'); ?>">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/user/img/favicons/favicon-16x16.png'); ?>">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/user/img/favicons/favicon.ico'); ?>">
  <link rel="manifest" href="<?php echo base_url('assets/user/img/favicons/manifest.json'); ?>">
  <meta name="msapplication-TileImage" content="<?php echo base_url('assets/user/img/favicons/mstile-150x150.png'); ?>">
  <meta name="theme-color" content="#ffffff">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <!-- ===============================================-->
  <!--    Stylesheets-->
  <!-- ===============================================-->
  <link href="<?= base_url()?>assets/user/css/theme.css" rel="stylesheet" />

</head>


<body>

  <!-- ===============================================-->
  <!--    Main Content-->
  <!-- ===============================================-->
  <main class="main" id="top">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 bg-light opacity-85" data-navbar-on-scroll="data-navbar-on-scroll">
      <div class="container"><a class="navbar-brand" href="index.html"><img class="d-inline-block align-top img-fluid" src="<?php echo base_url('assets/user/img/gallery/logo-icon.png'); ?>" alt="" width="50" /><span class="text-theme font-monospace fs-4 ps-2">Zou</span></a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item px-2"><a class="nav-link fw-medium active" aria-current="page" href="#Beranda">Beranda</a></li>
            <li class="nav-item px-2"><a class="nav-link fw-medium" href="<?php echo base_url('user/data_penyakit') ?>">Data Penyakit Padi</a></li>
            <li class="nav-item px-2"><a class="nav-link fw-medium" href="#Kesempatan">Kesempatan</a></li>
            <li class="nav-item px-2"><a class="nav-link fw-medium" href="#Cara Kerja">Cara Kerja</a></li>
            <li class="nav-item px-2"><a class="nav-link fw-medium" href="#Kontak">Kontak </a></li>
          </ul>
          <form class="d-flex">
            <a class="btn btn-lg btn-dark bg-gradient order-0" type="submit" href="<?php echo base_url('user/konsultasi'); ?>" role="button">Konsultasi</a>
          </form>
        </div>
      </div>
    </nav>