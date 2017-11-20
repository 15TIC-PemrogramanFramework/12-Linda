<?php $this->load->view('admin/header'); ?>

<div class="header"> 
	<h1 class="page-header" style="margin-bottom: -20px">

	</h1>
	<ol class="breadcrumb">
		<li><a href="#">Home</a></li>
		<li class="active">Table Berita</a></li>
	</ol> 

</div>
<div id="page-inner">
	<div class="row">
		<div class="col-md-12 text-right">
			<div style="margin-bottom:10px;">
		<?php echo anchor(site_url('admin/berita/tambah'),
			'<i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah Data',
			'class="btn btn-primary"');?>
			
		</div>
	</div>
</div>
<div class="row">
	<table id="example" class="table table-striped table-bordered">
		<thead>
			<tr>
				<th width="50px">Kode</th>
				<th width="100px">Judul</th>
				<th width="220px">Gambar</th>
				<th width="420px">Teks</th>
				<th width="100px">Tanggal</th>
				<th width="100px">Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($data_berita as $key => $row) {?>
			<tr>
				<td><?php echo $row->kode_berita; ?></td>
				<td><?php echo $row->judul; ?></td>
				<td><?php

				$encoded_image = base64_encode($row->gambar);
				echo '<img src="data:image/jpeg;base64,'.base64_decode($encoded_image).'" style="width:200px;height:180px;">';
					//echo '<img src="data:image/jpeg;base64,'.base64_encode($row->gambar).'" style="width:200px; height:180px"/>'; 
				?></td>
				<td><?php echo $row->teks; ?>...</td>
				<td><?php echo $row->tanggal_berita; ?></td>

			<td><?php echo anchor(site_url('admin/berita/edit/'.$row->kode_berita), 
				'<i class="fa fa-pencil" aria-hidden="true"></i>',
				'class="btn btn-warning"');?>
				<?php echo anchor(site_url('admin/berita/delete/'.$row->kode_berita),
					'<i class="fa fa-trash" aria-hidden="true"></i>',
					'class="btn btn-danger"');?>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>

<?php $this->load->view('admin/footer'); ?>
<script type="text/javascript">
	$(document).ready(function() {
		$('#example').DataTable();
	} );
</script>