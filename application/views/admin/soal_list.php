<?php $this->load->view('admin/header'); ?>

 <div class="header"> 
                        <h1 class="page-header" style="margin-bottom: -20px">
                           
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="#">Home</a></li>
					  <li class="active">Table Soal</a></li>
					</ol> 
									
		</div>
		 <div id="page-inner">

<div class="row">
	<div class="col-md-12 text-right">
		<div style="margin-bottom:20px;">
		<?php echo anchor(site_url('admin/materi/tambah_soal'),
			'<i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah data',
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
				<th style="width:200px">Soal</th>
				<th style="width:50px">Pilihan 1</th>
				<th style="width:50px">Pilihan 2</th>
				<th style="width:50px">Pilihan 3</th>
				<th style="width:50px">Pilihan 4</th>
				<th style="width:100px">Jawaban</th>
				<th style="width:100px">Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($data_soal as $key => $row) {?>
				<tr>
					<td><?php echo $row->kode_soal; ?></td>
					<td><?php echo $row->kategori; ?></td>
					<td><?php echo $row->soal; ?></td>
					<td><?php echo $row->pilihan1; ?></td>
					<td><?php echo $row->pilihan2; ?></td>
					<td><?php echo $row->pilihan3; ?></td>
					<td><?php echo $row->pilihan4; ?></td>
					<td><?php echo $row->jawaban; ?></td>
					
			<td><?php echo anchor(site_url('admin/materi/edit_soal/'.$row->kode_soal), 
				'<i class="fa fa-pencil" aria-hidden="true"></i>',
				'class="btn btn-warning"');?>
				<?php echo anchor(site_url('admin/materi/delete_soal/'.$row->kode_soal),
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