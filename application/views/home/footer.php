	<!-- Footer -->
	<footer id="footer" class="footer overlay-dark">
		<div class="container">

			<!-- Footer Logo Section -->
			<div class="footer-logo-sec">
				<div class="footer-logo-inner">
					<a class="footer-logo" href="#"><img src="<?php echo base_url('assets2/images/logo.png')?>" alt="logo"></a>
					<ul class="social-icons">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-skype"></i></a></li>
					</ul>
				</div>
			</div>
			<!-- Footer Logo Section -->

			<!-- Footer Columns -->
			<div class="row">
				<div class="footer-columns">

					<!-- Footer Column -->
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 r-full-width">
						<div class="footer-column">
							<h4>Kontak :</h4>
							<div class="contact-widget">
								<div class="location">
									<span class="location-icon"><i class="fa fa-map-marker"></i></span>
									<div>
										<p>King Street, Melbourne</p>
										<p>VIC 3000, Australia84</p>
									</div>
								</div>
							</div>
							<div class="contact-widget">
								<div class="location">
									<span class="location-icon"><i class="fa fa-mobile"></i></span>
									<div>
										<p>+62812 - 6888 - 9002</p>
										<p>Septariana</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Footer Column -->

					<!-- Footer Column -->
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 r-full-width">
						<div class="footer-column">
							<form action="<?php echo site_url('admin/guest/send'); ?>" method="post">
								<div class="form-group">
									<input type="text" class="form-control" name="nama" placeholder="Masukkan nama" style="color:white" required/>
								</div>
								<div class="form-group">
									<input type="email" class="form-control" name="email" placeholder="Masukkan email" style="color:white" required/>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="saran" placeholder="Masukkan saran atau komentar" style="color:white" required/>
								</div>
								<input type="hidden" name="kode" value="">
								<button type="submit" class="btn btn-primary">Kirim</button>
								<button type="reset" class="btn btn-default"><a href="<?php echo site_url('index') ?>">Cancel</a></button>
							</form>
						</div>
					</div>
					<!-- Footer Column -->

					<!-- Copy Rights -->
					<div class="col-md-12 copy-rights" style="margin-top: 20px">
						 <p>Copyright © 2016 <a target="_blank" title="Free CSS Themes" href="http://freecssthemes.com/">FreeCSSThemes</a> All Right Reserved</p>
					</div>
					<!-- Copy Rights -->

				</div>
			</footer>
			<!-- Footer -->

		</div>
		<!-- Wrapper -->

		<!-- back To Button -->
		<span id="scrollup" class="scrollup"><i class="fa fa-angle-up"></i></span>
		<!-- back To Button -->


		<!-- Switcher  Panel -->
		<div class="switcher"></div>  
		<!-- Switcher Panel -->

		<!-- Java Script -->
		<script src="<?php echo base_url('assets2/js/vendor/jquery.js')?>"></script>        		
		<script src="<?php echo base_url('assets2/js/vendor/bootstrap.js')?>"></script> 	
		<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<script src="<?php echo base_url('assets2/js/gmap3.min.js')?>"></script>				
		<script src="<?php echo base_url('assets2/js/parallax.js')?>"></script>			   	 
		<script src="<?php echo base_url('assets2/js/contact-form.js')?>"></script>			   	 
		<script src="<?php echo base_url('assets2/js/countdown.js')?>"></script>	
		<script src="<?php echo base_url('assets2/js/owl-carousel.js')?>"></script>
		<script src="<?php echo base_url('assets2/js/nstslider.js')?>"></script>
		<script src="<?php echo base_url('assets2/js/odometer.js')?>"></script>					
		<script src="<?php echo base_url('assets2/js/classie.js')?>"></script>			
		<script src="<?php echo base_url('assets2/js/bootstrap-select.js')?>"></script>				
		<script src="<?php echo base_url('assets2/js/colorpicker.js')?>"></script>					
		<script src="<?php echo base_url('assets2/js/appear.js')?>"></script>		
		<script src="<?php echo base_url('assets2/js/prettyPhoto.js')?>"></script>			
		<script src="<?php echo base_url('assets2/js/isotope.pkgd.js')?>"></script>						
		<script src="<?php echo base_url('assets2/js/sticky.js')?>"></script>						
		<script src="<?php echo base_url('assets2/js/wow-min.js')?>"></script>									
		<script src="<?php echo base_url('assets2/js/main.js')?>"></script>		
		<!-- Java Script -->

		<!-- Switcher JS -->
		<script type="text/javascript" src="<?php echo base_url('assets2/switcher/cookie.js')?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets2/switcher/colorswitcher.js')?>"></script>
		<!-- Switcher JS -->						
	
	</body>
	</html>