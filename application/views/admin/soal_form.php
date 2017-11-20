<?php $this->load->view('admin/header'); ?>

	 <div class="header"> 
                        <h1 class="page-header" style="margin-bottom: -20px">
                           
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="#">Home</a></li>
					  <li class="active">Form Soal</a></li>
					</ol> 
									
		</div>
		 <div id="page-inner">

<form action="<?php echo $action; ?>" method="post">
	<div class="form-group">
	<label style="margin-top: 30px">Kategori</label>
		<input type="text" class="form-control" name="kategori" value="<?php echo $kategori;?>" placeholder="Masukkan kategori" required>
	</div>
	<div class="form-group">
		<label>Soal</label>
		<input type="text" class="form-control"  name="soal" value="<?php echo $soal; ?>" required>
	</div>
	<div class="form-group">
		<label>Pilihan 1</label>
		<input type="text" class="form-control"  name="pilihan1" value="<?php echo $pilihan1; ?>" required>
	</div>
	<div class="form-group">
		<label>Pilihan 2</label>
		<input type="text" class="form-control"  name="pilihan2" value="<?php echo $pilihan2; ?>" required>
	</div>
	<div class="form-group">
		<label>Pilihan 3</label>
		<input type="text" class="form-control"  name="pilihan3" value="<?php echo $pilihan3; ?>" required>
	</div>
	<div class="form-group">
		<label>Pilihan 4</label>
		<input type="text" class="form-control"  name="pilihan4" value="<?php echo $pilihan4; ?>" required>
	</div>
	<div class="form-group">
		<label>Jawaban</label>
		<input type="text" class="form-control"  name="jawaban" value="<?php echo $jawaban; ?>" required>
	</div>
	<input type="hidden" name="kode_soal" value="<?php echo $kode_soal;?>">

	<button type="submit" class="btn btn-primary"><?php echo $button;?></button>
	<a href="<?php echo site_url('admin/materi/soal')?>" class="btn btn-default">Cancel</a> 
</form>

<?php $this->load->view('admin/footer'); ?>