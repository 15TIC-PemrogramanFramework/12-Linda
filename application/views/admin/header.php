<!DOCTYPE html>

<html>
<head>

    <title>Mook Yik Yang</title>

    <link href="<?php echo base_url('assets/css/bootstrap.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/js/morris/morris-0.4.3.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/custom-styles.css')?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/datatables/dataTables.bootstrap.css') ?>"/>
    <link href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo base_url('assets/js/Lightweight-Chart/cssCharts.css')?>"> 
    
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation" style="margin-top: -10px;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><strong><i class="icon fa fa-lock"></i> Mook Yik Yang</strong></a>
               
            </div>


        <ul class="nav navbar-top-links navbar-right">
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="margin-right: 10px" aria-expanded="false">
                    <i class="fa fa-user fa-fw"></i><b style="color:salmon"><?php echo $this->session->userdata('username'); ?></b> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="<?php echo site_url('login/logout'); ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
    </nav>
    <!--/. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
                <li>
                    <a href="<?php echo site_url('admin/berita'); ?>"><i class="fa fa-newspaper-o"></i> Table Berita</a>
                </li>
                <li>
                    <a href="<?php echo site_url('admin/berita/komentar'); ?>"><i class="fa fa-comment"></i> Table Komentar</a>
                </li> 
                <li>
                    <a href="<?php echo site_url('admin/materi'); ?>"><i class="fa fa-leanpub"></i> Table Materi</a>
                </li>   
                <li>
                    <a href="<?php echo site_url('admin/materi/soal'); ?>"><i class="fa fa-question"></i> Table Soal</a>
                </li>
                <li>
                    <a href="<?php echo site_url('admin/user'); ?>"><i class="fa fa-users"></i> Table Murid</a>
                </li>
                <li>
                    <a href="<?php echo site_url('admin/user/nilai'); ?>"><i class="fa fa-users"></i> Table Nilai Murid</a>
                </li>
                <li>
                    <a href="<?php echo site_url('admin/guest'); ?>"><i class="fa fa-inbox"></i> Table Saran</a>
                </li>
                <li>
                    <a href="<?php echo site_url('admin/pesan'); ?>"><i class="fa fa-inbox"></i> Pesan</a>
                </li>
            </ul>

        </div>

    </nav>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">

