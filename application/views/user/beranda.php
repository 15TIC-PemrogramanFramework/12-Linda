<?php $this->load->view('user/header');?>

<div class="row">
	<div class="col-md-12">
		<!-- Banner Slider -->

		<div class="parallax-window section-padding overlay-gray" data-image-src="images/inner-banner.jpg" data-parallax="scroll">
			<div class="container">

				<!-- Page heading -->
				<div class="page-heading">
					<h2>Profil User</h2>
				</div>
				<!-- Page heading -->

				<!-- Bredrcum -->
				<div class="tc-bredcrum">
					<ul>
						<li><a href="#">Beranda</a></li>
						<li class="active">Profil User</li>
					</ul>
				</div>
				<!-- Bredrcum -->

			</div>
		</div>
		<!-- Banner Slider -->
		<main class="main-content" style="margin-top: 370px;background-color: white">

			<!-- Team Detail -->
			<div class="profile-detail-holder">
				<div class="container">
					<div class="row">

						<!-- Profiler Detail -->
						<div class="profile-detail" style="margin-left: 60px">
							<?php foreach ($data_user as $key => $row) { ?>
							<!-- Proflier Img -->
							<div class="col-sm-6 col-xs-7 r-full-width">
								<figure class="profiler-big-img" >
									<?php
									$encoded_image = base64_encode($row->foto_profil);
									echo '<img src="data:image/jpeg;base64,'.base64_decode($encoded_image).'" style="width:100%;height:560px;">';?>
								</figure>
							</div>
							<!-- Proflier Img -->

							<!-- Personal Detail -->
							<div class="col-sm-6 col-xs-5 r-full-width">
								<div class="personal-detail section-padding-top" style="margin-left: 60px">
									<?php if($jk="perempuan"){ ?>
									<h1>Mrs. <b style="color: salmon"><?php echo $this->session->userdata('username'); ?></b></h1>
									<?php } else{?>
									<h1>Mr. <b style="color: salmon"><?php echo $this->session->userdata('username'); ?></b></h1>
									<?php } ?>
									<ul class="social-icons">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
										<li><a href="#"><i class="fa fa-skype"></i></a></li>
									</ul>
									<div class="profiler-address" style="margin-top: -30px">
										<ul>
											<li>
												<span class="fa fa-envelope"></span>
												<div>
													<span style="color:salmon"><?php echo $row->email; ?></span>
													<span></span>
												</div>
											</li>
											<li>
												<span class="fa fa-mobile"></span>
												<div>
													<span style="color:salmon"><?php echo $row->no_hp; ?></span>
													<span></span>
												</div>
											</li>
											<li>
												<?php if($row->jk="perempuan"){ ?>
												<span class="fa fa-female"></span>
												<div>
													<span style="color:salmon"><?php echo $row->jk; ?></span>
													<span></span>
												</div>
												<?php } else{ ?>
												<span class="fa fa-male"></span>
												<div>
													<span style="color:salmon"><?php echo $row->jk; ?></span>
													<span></span>
												</div>
												<?php } ?>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<!-- Personal Detail -->
							<?php } ?>
						</div>
						<!-- Profiler Detail -->



					</div>
				</div>
			</div>
			<!-- Team Detail -->
		</main>
	</div>
</div>



<?php $this->load->view('user/footer'); ?>