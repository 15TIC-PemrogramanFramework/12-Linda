<?php $this->load->view('admin/header'); ?>

<div class="header"> 
	<h1 class="page-header" style="margin-bottom: -20px"></h1>
	<ol class="breadcrumb">
		<li><a href="#">Home</a></li>
		<li class="active">Form Berita</a></li>
	</ol> 
</div>
<div id="page-inner">
	<form action="<?php echo $action; ?>" enctype="multipart/form-data" method="post">
		<div class="form-group">
			<label style="margin-top: 30px">Judul</label>
			<input type="text" class="form-control" name="judul" value="<?php echo $judul;?>" placeholder="Masukkan judul" required>
		</div>
		<div class="form-group">
			<label>Gambar</label>
			<input type="file" style="padding-bottom: 40px" class="form-control"  name="gambar" required>
		</div>
		<div class="form-group">
			<label>Teks</label>
			<textarea class="form-control" name="teks" placeholder="Masukkan teks" rows=11 required><?php echo $teks;?></textarea>
		</div>
		<input type="hidden" name="kode_berita" value="<?php echo $kode_berita;?>">

		<button type="submit" class="btn btn-primary"><?php echo $button;?></button>
		<a href="<?php echo site_url('admin/berita')?>" class="btn btn-default">Cancel</a> 
	</form>

<?php $this->load->view('admin/footer'); ?>
	