<?php $this->load->view('user/header');?>

<div class="row">
	<div class="col-md-12">
		<!-- Banner Slider -->

		<div class="parallax-window section-padding overlay-gray" data-image-src="images/inner-banner.jpg" data-parallax="scroll">
			<div class="container">

				<!-- Page heading -->
				<div class="page-heading">
					<h2>Edit Profil</h2>
				</div>
				<!-- Page heading -->

				<!-- Bredrcum -->
				<div class="tc-bredcrum">
					<ul>
						<li><a href="#">Beranda</a></li>
						<li class="active">Form Edit Profil</li>
					</ul>
				</div>
				<!-- Bredrcum -->

			</div>
		</div>
		<!-- Banner Slider -->
</div>
</div>

<div class="row">
	<div class="col-md-12">

		<form action="<?php echo site_url('user/pesan/edit_aksi'); ?>" enctype="multipart/form-data"  method="post" style="margin-left: 200px; margin-right: 200px">
		<div class="form-group">
			<label style="margin-top: 30px">Username</label>
			<input type="text" class="form-control" name="username" value="<?php echo $username;?>" disabled>
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="password" class="form-control" name="password" value="<?php echo $password;?>" required>
		</div>
		<div class="form-group">
			<label>Foto Profil</label>
			<input type="file" style="padding-bottom: 40px" class="form-control"  name="foto_profil" required>
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="text" class="form-control" value="<?php echo $email;?>" placeholder="masukkan email" name="email">
		</div>
		<div class="form-group">
			<label>No Handphone</label>
			<input type="text" class="form-control" value="<?php echo $no_hp;?>" placeholder="masukkan no hp" name="no_hp">
		</div>
		<div class="form-group">
			<label>Jenis Kelamin</label>
			<input type="text" class="form-control" value="<?php echo $jk;?>" placeholder="masukkan jenis kelamin" name="jk">
		</div>
		<input type="hidden" name="kode_user" value="<?php echo $kode_user;?>">
		<input type="hidden" name="username" value="<?php echo $this->session->userdata('username'); ?>">
		
		<button type="submit" class="pink-btn" >Simpan</button>
		<a href="<?php echo site_url('login/beranda')?>" class="btn btn-default">Cancel</a> 
	</form>
	

	</div>
</div>
<?php $this->load->view('user/footer'); ?>
