<?php $this->load->view('admin/header'); ?>
<div class="header"> 
	<h1 class="page-header" style="margin-bottom: -20px">
		
	</h1>
	<ol class="breadcrumb">
		<li><a href="#">Home</a></li>
		<li class="active">Form Komentar</a></li>
	</ol> 
	
</div>
<div id="page-inner">
	
	<form action="<?php echo $action; ?>" method="post">
		<div class="form-group">
			<label style="margin-top: 30px">Nama</label>
			<input type="text" class="form-control" name="username" value="<?php echo $username; ?>" required/>
		</div>
		<div class="form-group">
			<label>Komentar</label>
			<input type="text"  class="form-control"  name="komentar" value="<?php echo $komentar; ?>" required/>
		</div>
		
		<input type="hidden" name="kode_berita" value="<?php echo $kode_berita;?>">
		<input type="hidden" name="kode_komen" value="<?php echo $kode_komen;?>">

		<button type="submit" class="btn btn-primary"><?php echo $button;?></button>
		<a href="<?php echo site_url('admin/berita/komentar')?>" class="btn btn-default">Cancel</a> 
	</form>

	<?php $this->load->view('admin/footer'); ?>