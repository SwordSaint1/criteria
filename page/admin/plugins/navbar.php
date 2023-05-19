<?php 
//SESSION
include '../../process/session.php';
if($role == 'admin'){
        // DO NOTHING
    }else{
        session_unset();
        session_destroy();
        header('location: ../../index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Criteria | System</title>

  <link rel="icon" href="../../dist/img/logo.png" type="image/x-icon" />
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <!-- <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"> -->
  <!-- iCheck -->
  <!-- <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css"> -->
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <!-- <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css"> -->
  <!-- Daterange picker -->
  <!-- <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css"> -->
  <!-- summernote -->
  <!-- <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.min.css"> -->
  <!-- Toastr -->
  <!-- <link rel="stylesheet" href="../../plugins/toastr/toastr.min.css"> -->
     <!-- Sweet Alert -->
  <link rel="stylesheet" href="../../node_modules/sweetalert2/dist/sweetalert2.min.css">
    <style>
   .loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #536A6D;
  width: 50px;
  height: 50px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(1080deg); }
} 
  </style>
</head>
<body class="hold-transition sidebar-collapse layout-top-nav">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../../dist/img/logo.png" alt="logo" height="60" width="60">
  </div>
<!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="dashboard.php" class="navbar-brand">
        <img src="../../dist/img/logo.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"><b>Criteria SYSTEM</b></span>
      </a>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <li class="nav-item">
          <a href="#" class="nav-link" data-toggle="modal" data-target="#register_contestant">
              <i class="nav-icon fas fa-edit text-info"></i> Register Contestant
            </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" data-toggle="modal" data-target="#logout-modal">
              <i class="nav-icon fas fa-power-off text-danger"></i> Logout
            </a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- /.navbar -->