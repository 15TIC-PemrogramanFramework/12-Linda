<?php $this->load->view('admin/header'); ?>

<div class="header"> 
	<h1 class="page-header" style="margin-bottom: -20px">
		
	</h1>
	<ol class="breadcrumb">
		<li><a href="#">Home</a></li>
		<li class="active">Form Murid</a></li>
	</ol> 
	
</div>
<div id="page-inner">
	
	<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label style="margin-top: 30px">Username</label>
			<input type="text" class="form-control" name="username" value="<?php echo $username;?>" placeholder="Masukkan username" required>
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="password" class="form-control"  name="password" value="<?php echo $password; ?>" required>
		</div>
		<div class="form-group">
			<label>Foto Profil</label>
			<input type="file" style="padding-bottom: 40px" class="form-control"  name="foto_profil" required>
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="text" class="form-control" name="email" placeholder="Masukkan email" required value="<?php echo $email;?>" >
		</div>
		<div class="form-group">
			<label>No Hp</label>
			<input type="text" class="form-control" name="no_hp" placeholder="Masukkan no hp" required value="<?php echo $no_hp;?>">
		</div>
		<div class="form-group">
			<label>Jenis Kelamin</label>
			<input type="text" class="form-control" name="jk" placeholder="Masukkan jenis kelamin" required value="<?php echo $jk;?>">
		</div>
		<input type="hidden" name="kode_user" value="<?php echo $kode_user;?>">

		<button type="submit" class="btn btn-primary"><?php echo $button;?></button>
		<a href="<?php echo site_url('admin/user')?>" class="btn btn-default">Cancel</a> 
	</form>

	<?php $this->load->view('admin/footer'); ?>