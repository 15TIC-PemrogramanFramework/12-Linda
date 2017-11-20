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
				<div class="tc-bredcrum" style="margin-right: 230px">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Materi</a></li>
						<li class="active"><?php echo $kategori; ?></li>
					</ul>
				</div>
				<!-- Bredrcum -->

			</div>
		</div>
		<!-- Banner Slider -->
		<!-- Main Content -->
		<main class="main-content section-padding white-bg">
			<div class="container">
				<!-- Gallery Section -->
				<div class="gallery-holder gallery-v1">
					<!-- Gallery V-3 -->
					<div class="row">

						<!-- Gallery Figures -->
						<div id="filter-masonry" class="gallery-masonry section-padding-top">	
							<?php foreach ($data_materi as $key => $row) { ?>
							<!-- gallery Figure -->
							<div class="masonry-grid col-sm-4 col-xs-6 r-full-width image">
								<div class="gallery-figure">
									<figure class="gallery-img">
										<!--<?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row->gambar).'" style="height:300px"/>'; ?>-->
										<?php
										$encoded_image = base64_encode($row->gambar);
										echo '<img src="data:image/jpeg;base64,'.base64_decode($encoded_image).'" style="height:300px;">' ?>
										<figcaption class="gallery-hover">
											<div class="tc-display-table">
												<div class="tc-display-table-cell">
													<ul class="btn-list">
														<li><a class="fa">
															<?php echo $row->karakter; ?>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</figcaption>
								</figure>
								<div class="gallery-figure-detail">
									<h4></h4>
									<span class="product-price" style="margin-top: -10px; color:black"><?php echo $row->pinyin; ?></span>
									<span class="product-price" style="margin-top: -10px; color:black"><?php echo $row->arti; ?></span>
								</div>
							</div>
						</div>
						<!-- gallery Figure -->
						<?php } ?>
					</div>
					<!-- Gallery Figures -->
				</div>
				<!-- Gallery Section -->

			</div>
		</main>
		<!-- Main Content -->







	</div>
	<!-- Wrapper -->

	<!-- back To Button -->
	<span id="scrollup" class="scrollup"><i class="fa fa-angle-up"></i></span>
	<!-- back To Button -->

	<!-- Switcher  Panel -->
	<div class="switcher"></div>  
	<!-- Switcher Panel -->

	
	<?php $this->load->view('user/footer'); ?>
