<?php $this->load->view('admin/header'); ?>

 <div class="header"> 
                        <h1 class="page-header" style="margin-bottom: -20px">
                           
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="#">Home</a></li>
					  <li class="active">Table Materi</a></li>
					</ol> 
									
		</div>
		 <div id="page-inner">

<div class="row">
	<div class="col-md-12 text-right">
		<div style="margin-bottom:20px;">
		<?php echo anchor(site_url('admin/materi/tambah'), 
			'<i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah Data',
			'class="btn btn-primary"');?>
			
		</div>
	</div>
</div>
<div class="row">
	<table id="example" class="table table-striped table-bordered">
		<thead>
			<tr>
				<th style="width:50px">Kode</th>
				<th style="width:100px">Kategori</th>
				<th style="width:200px">Gambar</th>
				<th style="width:50px">Karakter</th>
				<th style="width:50px">Pinyin</th>
				<th style="width:50px">Arti</th>
				<th style="width:100px">Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($data_materi as $key => $row) {?>
				<tr>
					<td><?php echo $row->kode_materi; ?></td>
					<td><?php echo $row->kategori; ?></td>
					<td><?php

									$encoded_image = base64_encode($row->gambar);
									echo '<img src="data:image/jpeg;base64,'.base64_decode($encoded_image).'" style="width:200px;height:180px;">';
					 //echo '<img src="data:image/jpeg;base64,'.base64_encode($row->gambar).'" style="width:200px; height:180px"/>'; 
					 ?></td>
					<td><?php echo $row->karakter; ?></td>
					<td><?php echo $row->pinyin; ?></td>
					<td><?php echo $row->arti; ?></td>
					
			<td><?php echo anchor(site_url('admin/materi/edit/'.$row->kode_materi),
				'<i class="fa fa-pencil" aria-hidden="true"></i>',
				'class="btn btn-warning"');?>
				<?php echo anchor(site_url('admin/materi/delete/'.$row->kode_materi),
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

