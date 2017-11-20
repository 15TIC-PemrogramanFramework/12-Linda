<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<title>Mook Yik Yang</title>

	<!-- Icomoon -->
	<link rel="stylesheet" href="<?php echo base_url('assets2/css/icomoon.css')?>">

	<!-- StyleSheets -->
	<link rel="stylesheet" href="<?php echo base_url('assets2/css/vendor/bootstrap.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets2/css/style.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets2/css/main.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets2/css/color-1.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets2/css/animate.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets2/css/responsive.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets2/css/transition.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets2/css/font-awesome.min.css')?>">

	<!-- Switcher CSS -->
	<link href="<?php echo base_url('assets2/switcher/switcher.css')?>" rel="stylesheet" type="text/css"/> 

</head>
<body>

<!-- Wrapper -->
<div class="wrapper">
	<header id="header" class="inner-header sticky-2">
		<div class="container">
			
			<!-- logo -->
			<div class="logo-holder">
				<strong><a id="inner-logo" href="in
					dex.html"></a></strong>
			</div>
			<!-- logo -->
			
			<!-- Navigation -->
		    <nav class="navigation-holder">
		    	<a class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		    		<i class="fa fa-bars"></i>
		    	</a>
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      	<ul class="tc-navigation">                                                            
			      		<li>
				          	<a href="<?php echo site_url('login/beranda'); ?>">Beranda</a>
				        </li>
			      		<li>
				          	<a href="#.">Materi</a>
				          	<ul>
				          		<?php foreach ($data_kat as $key => $row) {
				          			?>
				            	<li><a href="<?php echo site_url('user/materi/tampil_kategori/'.$row->kategori); ?>"><?php echo $row->kategori; ?></a></li>
				            	<?php } ?>
				          	</ul>
				        </li>
				        <li>
				          	<a href="#.">Latihan Soal</a>
				          	<ul>
				          		<?php foreach ($data_kat as $key => $row) {
				          			?>
				            	<li><a href="<?php echo site_url('user/materi/tampil_soal/'.$row->kategori); ?>"><?php echo $row->kategori; ?></a></li>
				            	<?php } ?>
				          	</ul>
				        </li>
				        <li>
				          	<a href="<?php echo site_url('user/berita'); ?>">Berita</a>
	
				        </li>
				        <li>
				          	<a href="<?php echo site_url('user/pesan'); ?>">Kirim Pesan</a>
				        </li>
				        <li style="margin-left:180px; margin-right:-130px ">
				          	<a href="#"><i class="fa fa-user"></i> <?php echo $this->session->userdata('username'); ?></a>
				          	<ul>
				            	<li><a href="<?php echo site_url('user/pesan/editprofil/'.$this->session->userdata('username')); ?>">Edit profil</a></li>
				            	<li><a href="<?php echo site_url('login/logout2'); ?>">Logout</a>
				            	</li>
				          	</ul>
				        </li>
			      	</ul>
			    </div>
		    </nav>
		    <!-- Navigation -->

		   
		</div>
	</header>
	<!-- Header -->