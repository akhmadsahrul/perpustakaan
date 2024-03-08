<?php 
  if (auth()->level() =='admin') {
    view('backend/buku/data');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>E-PERPUS</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= asset('plugins/fontawesome-free/css/all.min.css') ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- css untuk select2 -->
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <!-- jika menggunakan bootstrap4 gunakan css ini  -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@x.x.x/dist/select2-bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= asset('dist/css/adminlte.min.css') ?>">
  <!-- summernote -->
  <link rel="stylesheet" href="<?= asset('plugins/summernote/summernote-bs4.min.css') ?>">
  <!-- Datatable -->
  <link rel="stylesheet" href="<?= asset('plugins/dataTables.bootstrap4.min.css') ?>">

  <link rel="stylesheet" href="<?= asset('css/buttons.dataTables.min.css') ?>">
  <link rel="stylesheet" href="<?= asset('css/summernote.min.css') ?>">
</head>

<style>
  .merah{
    color:red;
  }
</style>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

      <?php
          if (!empty(auth()->session())) {
      ?>
    
       <ul class="navbar-nav ml-auto">
          <!-- Notifications Dropdown Menu -->
          <li class="nav-item dropdown ">
            <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="true">
              <i class="far fa-user"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right " style="left: inherit; right: 0px;">
            
              <span class="dropdown-item dropdown-header">Login Menggunakan</span>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-user mr-2"></i> <?= auth()->username() ?>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-envelope mr-2"></i> <?= auth()->email() ?>
              </a>

              <div class="dropdown-divider"></div>

             
                <!-- <a href="../users/profil.php" class="btn btn-primary btn-sm mx-3 my-3 float-left">Profil</a> -->

                <a href="<?php controller('Auth/AuthController@logout') ?>" class="btn btn-dark btn-sm mx-3 my-3 float-right">Keluar</a>
            </div>
          </li>
        </ul>
        <?php } ?>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <center>
        <h2 style="font-family: Arial, Helvetica, sans-serif; font-size:30px" >E-PERPUS</h2>
        <!-- <img src="<?= asset('dist/img/pandoracode.png') ?>" alt="AdminLTE Logo" class="brand-image mt-2" style="opacity: .8;max-width:200px"><br> -->
      </center>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <?php include 'menu.php' ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="height: auto;">
    <!-- Main content --><br>
    <section class="content">
      <div class="container-fluid">
 
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-12">
            <!-- Custom tabs (Charts with tabs)-->