 <?php $this->load->view('user/header'); ?>


 <div class="row">
 	<div class="col-md-12">
 		<!-- Main Content -->
 		<main class="main-content section-padding white-bg">
 			<div class="container">
 				<div class="row">

 					<!-- Blog Detail -->
 					<div class="col-lg-8 col-md-8 col-sm-7">
 						<div class="blog-detail">

 							<!-- Blog Post -->
 							<div class="single-blog-post">

 								<!-- Post Detail -->
 								<?php foreach ($ambil_id as $key => $row) { ?>
 								<figure class="post-img">
 									<!--<?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row->gambar).'"/>' ?>-->
 									<?php
									$encoded_image = base64_encode($row->gambar);
									echo '<img src="data:image/jpeg;base64,'.base64_decode($encoded_image).'">' ?>
 								</figure>
 								<div class="blog-post-detail">
 									<div class="center-detail-inner">
 										<h3><?php echo $row->judul; ?></h3>
 										<div>
 											<ul class="meta-post">
 												<li><i class="fa fa-user"></i>Admin</li>
 												<li><i class="fa fa-clock-o"></i><?php echo $row->tanggal_berita; ?></li>
 												<li><i class="fa fa-comment"></i><?php echo $row->jmlkomen; ?> Komentar</li>
 													</ul>
 												</div>
 												<div style="color: black;">
 													<?php echo nl2br($row->teks); ?>
 													<br/>
 													<?php if($row->kode_berita=='3') {?>
 														<video style="margin-left: 120px" controls>
 															<source src="<?php echo base_url('assets2/video/nada.mp4')?>" type="video/mp4">
 														</video>
 														<?php } ?>
 												</div>
 											</div>
 										</div>
 										<!-- Post Detail -->
 										<?php } ?>
 									</div>
 									<!-- Blog Post -->



 									<!-- Comments -->
 									<div class="comments-holder section-padding-bottom" style="margin-top: 30px">
 										<div class="comment-heading">
 											<h2>Comments</h2>
 										</div>
 										<!-- Comments List -->
 										<ul class="comment-list" style="margin-top: -40px;">
 											<?php foreach($data_komen as $key => $row2){ ?>
 											<li style="margin-top: -35px">
 												<?php if($this->session->userdata('username') == $row2->username){
 												?>
 												<span style="text-align: right">
 													<a href="<?php echo (site_url('user/berita/delete_komen/'.$row2->kode_komen.'/'.$row2->kode_berita)); ?>">Delete</a>
 												</span>
 												<?php } ?>
 												<span class="admin-img">
 													<!--<?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row2->foto_profil).'" style="width:70px; height: 75px">' ?>-->
 													<?php
														$encoded_image = base64_encode($row2->foto_profil);
														echo '<img src="data:image/jpeg;base64,'.base64_decode($encoded_image).'" style="width:70px;height:75px;">' ?>
 														
 													</span>
 												
 												<div class="commenter-detail">
 													<div class="commenter-name">
 														<span><?php echo $row2->username; ?></span>
 														<span><?php echo $row2->tanggal_komen; ?></span>
 													</div>
 													<p><?php
 														$str = parse_smileys($row2->komentar, 'http://localhost/uts_fw/assets2/smileys/');
 													 	echo $str; ?>
 													 </p>
 												</div>
 											</li>
 											<?php } ?>

 										</ul>
 										<!-- Comments List -->
 									</div>
 									<!-- Comments -->

 									<!-- Comment Form -->
 									<div class="commnet-form" style="margin-top: -65px; margin-left: 15px">

 										<div class="row">
 											<form action="<?php echo (site_url('user/berita/tambah_aksi_komen/'.$row->kode_berita)); ?>" method="post">
 												<div class="form-group">
 													<input type="text" name="username" class="form-control" value="<?php echo $this->session->userdata('username'); ?>" disabled/>
 												</div>
 												<div class="form-group">
 													<textarea class="form-control" name="komentar" id="comments" required placeholder="Balas Komentar..." rows=11></textarea>
 												</div>
 												 <?php $this->load->view('smiley_view'); ?>
 												<input type="hidden" name="kode_berita" value="<?php echo $row->kode_berita; ?>">
 												<input type="hidden" name="username" value="<?php echo $this->session->userdata('username'); ?>">
 												<button type="submit" class="pink-btn" type="submit">Kirim</button>
 												<button class="pink-btn" type="reset">Reset</button><
 											</form>
 										</div>
 									</div>
 									<!-- Comment Form -->

 								</div>
 							</div>
 							<!-- Blog Detail -->

 							<!-- Aside -->
 							<aside class="col-lg-4 col-md-4 col-sm-5">

 								<!-- Recent Post -->
 								<div class="aside-widget">
 									<h3>Popular Post</h3>
 									<div class="recent-post">
 										<ul>
 											<li>
 												<span class="recent-post-img"><img src="<?php echo base_url('assets2/foto/xieyi.jpg');?>" style="width:70px; height: 75px"></span>
 												<div class="recent-post-detail">
 													<h5><a href="<?php echo site_url('user/berita/readme/'.'19'); ?>">Xieyi</a></h5>
 													<span class="recent-post-date"><i class="fa fa-clock-o"></i>2017-07-18</span>
 													<p>Teknik lukisan Xieyi</p>
 												</div>
 											</li>
 											<li>
 												<span class="recent-post-img"><img src="<?php echo base_url('assets2/foto/kaligrafi.jpg');?>" style="width:70px; height: 75px"></span>
 												<div class="recent-post-detail">
 													<h5><a href="<?php echo site_url('user/berita/readme/'.'21'); ?>">Kaligrafi Cina</a></h5>
 													<span class="recent-post-date"><i class="fa fa-clock-o"></i>2017-07-19</span>
 													<p>Sejarah Kaligrafi Cina</p>
 												</div>
 											</li>
 											<li>
 												<span class="recent-post-img"><img src="<?php echo base_url('assets2/foto/marouflage.jpg');?>" style="width:70px; height: 75px"></span>
 												<div class="recent-post-detail">
 													<h5><a href="<?php echo site_url('user/berita/readme/'.'20'); ?>">Marouflage</a></h5>
 													<span class="recent-post-date"><i class="fa fa-clock-o"></i>2017-07-15</span>
 													<p>Bahan lukisan Marouflage</p>
 												</div>
 											</li>
 										</ul>
 									</div>
 								</div>
 								<!-- Recent Post -->

 								<!-- Tags -->
 								<div class="aside-widget">
 									<h3>Tags</h3>
 									<div class="tags-list">
 										<ul>
 											<li><a href="#">China</a></li>
 											<li><a href="#">Budaya</a></li>
 											<li><a href="#">Kaligrafi</a></li>
 											<li><a href="#">Teknik</a></li>
 											<li><a href="#">Sejarah</a></li>
 										</ul>
 									</div>
 								</div>
 								<!-- Tags -->

 							</aside>
 							<!-- Aside -->

 						</div>
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

 		</div>
 	</div>

 	<?php $this->load->view('user/footer'); ?>