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
						<li><a href="#">Beranda</a></li>
						<li><a href="#">Latihan Soal</a></li>
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
				<form action='<?php echo site_url('user/materi/jawaban/'.$kategori); ?>' method="post">
					<?php foreach ($data_soal as $key => $row) { ?>
					<label style="border:groove; border-color: salmon; margin-top: 20px; padding-left: 30px; padding-top: 10px; padding-bottom: 10px">
						<?php echo ($key+1) . '. ' . $row->soal . '<br/>';?>
						<input type="radio" style="margin-left: 20px" name="soal<?php echo ($key+1); ?>" value="pil1"><?php echo $row->pilihan1; ?>
						<input type="radio" style="margin-left: 100px" name="soal<?php echo ($key+1); ?>" value="pil2"><?php echo $row->pilihan2; ?></br>
						<input type="radio" style="margin-left: 20px" name="soal<?php echo ($key+1); ?>" value="pil3"><?php echo $row->pilihan3; ?>
						<input type="radio" style="margin-left: 100px" name="soal<?php echo ($key+1); ?>" value="pil4"><?php echo $row->pilihan4; ?></br>
					</label>
					<input type="hidden" name="jwb<?php echo ($key+1); ?>" value="<?php echo $row->jawaban; ?>">

					<?php } ?>
					<input type="hidden" name="jmlsoal" value="<?php echo ($key+1); ?>">
					<input class="pink-btn" type="submit" style="margin-top: 10px; align-content: right" value="Hitung Nilai"/>
				</form> 


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
