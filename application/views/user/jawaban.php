	<?php $this->load->view('user/header'); ?>
	<!-- Wrapper -->
	<div class="wrapper">

		<!-- Banner Slider -->
		<div class="parallax-window section-padding" style="background-color: whitesmoke" data-image-src="images/inner-banner.jpg" data-parallax="scroll">
			<div class="container">

				<!-- Page heading -->
				<div class="page-heading" style="margin-left: 45px">
					<h2><?php echo $kategori; ?></h2>
				</div>
				<!-- Page heading -->

				<!-- Bredrcum -->
				<div class="tc-bredcrum" style="margin-right: 210px">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Hasil</a></li>
						<li class="active"><?php echo $kategori; ?></li>
					</ul>
				</div>
				<!-- Bredrcum -->

			</div>
		</div>
		<!-- Banner Slider -->
		<!-- Bages Collections -->

		<div class="section-padding white-bg shop-categories">
			<div class="container">
				<center><h2 style="color:salmon;">Hasil Latihan</h2></center>
				
				<label style="border:groove; border-color: salmon; margin-top: 20px; margin-left: 350px; margin-right: 350px; padding-top: 40px; padding-bottom: 40px">
					<b style="color: salmon; font-size: 20px; padding: 175px;">Nilai : <?php echo $nilai; ?></b>
				</label>
				<marquee style="color: salmon; font-size: 18px; margin-top: 60px">Terimakasih Telah Mengerjakan! :)</marquee>
			</div>
		</div>
		<!-- Bages Collections -->

	</div>
	<!-- Wrapper -->

	<!-- back To Button -->
	<span id="scrollup" class="scrollup"><i class="fa fa-angle-up"></i></span>
	<!-- back To Button -->

	<!-- Switcher  Panel -->
	<div class="switcher"></div>  
	<!-- Switcher Panel -->

	<?php $this->load->view('user/footer'); ?>
