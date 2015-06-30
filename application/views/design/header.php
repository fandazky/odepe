<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>SI ODP</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="<?php echo base_url() ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    
    <link href="<?php echo base_url() ?>assets/ionicons/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- daterange picker -->
    <link href="<?php echo base_url() ?>assets/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- iCheck for checkboxes and radio inputs -->
    <link href="<?php echo base_url() ?>assets/plugins/iCheck/all.css" rel="stylesheet" type="text/css" />
    <!-- DATA TABLES -->
    <link href="<?php echo base_url() ?>assets/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap Color Picker -->
    <link href="<?php echo base_url() ?>assets/plugins/colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet"/>
    <!-- Bootstrap time Picker -->
    <link href="<?php echo base_url() ?>assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet"/>
    <!-- Theme style -->
    <link href="<?php echo base_url() ?>assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="<?php echo base_url() ?>assets/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

  </head>
  <body class="skin-red-light sidebar-mini">
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>SI</b>O</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Sisfor</b>ODP</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>

          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo base_url() ?>assets/dist/img/user2.png" class="user-image" alt="User Image"/>
                  <span class="hidden-xs"><?php echo $pengguna['username']?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo base_url() ?>assets/dist/img/user2.png" class="img-circle" alt="User Image" />
                    <p>
                      <?php 
                        echo $pengguna['first_name'];
                        if($pengguna['level']==1)
                          echo "<small>Administrator</small>";
                        else
                          echo "<small>Operator</small>"
                      ?>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <!-- <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div> -->
                    <div class="pull-right">
                      <a href="<?php echo base_url() ?>login/logout" class="btn btn-warning btn-flat">Keluar <i class="fa fa-sign-out"></i></a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              
            </ul>
          </div>

          <div class="navbar-custom-menu pull-left">
            <ul class="nav navbar-nav">
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="user ">
                <a >
                  <span class="hidden-xs"><?php
                    setlocale(LC_ALL,'IND');
                    echo strftime("%A, ");
                    echo date('d ');
                    echo strftime("%B");
                    echo date(' Y');
                  ?></span>
                </a>
                
              </li>
              <!-- Control Sidebar Toggle Button -->
              
            </ul>
          </div>

        </nav>
      </header>        
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar" >
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo base_url() ?>assets/dist/img/user.png" class="img-circle" alt="User Image" />
            </div>
            
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MENU</li>
            <li>
              <a href="<?php echo base_url() ?>access">
                <i class="fa fa-home"></i> <span>Home</span>
              </a>
            </li>
            
            <!-- <?php //if($jabatan == "Admin"){ ?> -->
            <li class="treeview">
              <a href="#">
                <i class="fa fa-user text-aqua"></i>
                <span>Manajemen User</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url() ?>manajemen_user/"><i class="fa fa-table"></i>Lihat semua user</a></li>
                <li><a href="<?php echo base_url() ?>manajemen_user/lihat_request"><i class="fa fa-table"></i>Lihat user request</a></li>
              </ul>
            </li>
            <!-- <?php //} ?> -->
            <li class="treeview">
              <a href="#">
                <i class="fa fa-tablet text-aqua"></i>
                <span>Manajemen ODP</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url() ?>media/tambah"><i class="fa fa-plus-square"></i>Tambah ODP</a></li>
                <li><a href="<?php echo base_url() ?>media/tambah"><i class="fa fa-plus-square"></i>Tambah Cluster</a></li>
                <li><a href="<?php echo base_url() ?>media"><i class="fa fa-edit"></i>Manajemen</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-road text-aqua"></i>
                <span>Survey ODP</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url(); ?>survey"><i class="fa fa-plus-square"></i>Input Hasil Survey</a></li>
                <li><a href="<?php echo base_url(); ?>survey"><i class="fa fa-table"></i>Lihat Hasil Survey</a></li>
              </ul>
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart text-aqua"></i>
                <span>Report ODP</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../charts/morris.html"><i class="fa fa-file-text"></i>Report per Cluster</a></li>
                <li><a href="../charts/morris.html"><i class="fa fa-file-text"></i>Report per Set Operation</a></li>
                <li><a href="../charts/morris.html"><i class="fa fa-file-text"></i>Report Witel Malang</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-info-circle text-aqua"></i>
                <span>Support</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../charts/morris.html"><i class="fa fa-book"></i>User Manual</a></li>
              </ul>
            </li>

          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Selamat Datang <?php echo $pengguna['first_name']." ".$pengguna['last_name'];?>
          </h1>
          