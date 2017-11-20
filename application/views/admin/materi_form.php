<?php $this->load->view('admin/header'); ?>

	<div class="header"> 
                        <h1 class="page-header" style="margin-bottom: -20px">
                           
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="#">Home</a></li>
					  <li class="active">Form Materi</a></li>
					</ol> 
									
		</div>
		 <div id="page-inner">

<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
	<div class="form-group">
	<label style="margin-top: 30px">Kategori</label>
		<input type="text" class="form-control" name="kategori" value="<?php echo $kategori;?>" placeholder="Masukkan kategori" required>
	</div>
	<div class="form-group">
		<label>Gambar</label>
		<input type="file" style="padding-bottom: 40px" class="form-control"  name="gambar" required>
	</div>
	<div class="form-group">
	<label>Karakter</label>
		<input type="text" class="form-control" name="karakter" value="<?php echo $karakter;?>" placeholder="Masukkan karakter" required>
	</div>
	<div class="form-group">
	<label>Pinyin</label>
		<input type="text" class="form-control" name="pinyin" value="<?php echo $pinyin;?>" placeholder="Masukkan pinyin" required>
	</div>
	<div class="form-group">
	<label>Arti</label>
		<input type="text" class="form-control" name="arti" value="<?php echo $arti;?>" placeholder="Masukkan arti" required>
	</div>
	<input type="hidden" name="kode_materi" value="<?php echo $kode_materi;?>">

	<button type="submit" class="btn btn-primary"><?php echo $button;?></button>
	<a href="<?php echo site_url('admin/materi')?>" class="btn btn-default">Cancel</a> 
</form>

<?php $this->load->view('admin/footer'); ?>