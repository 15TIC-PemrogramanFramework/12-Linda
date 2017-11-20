<?php $this->load->view('admin/header'); ?>

<div class="header"> 
                        <h1 class="page-header" style="margin-bottom: -20px">
                           
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="#">Home</a></li>
					  <li class="active">Table Murid</a></li>
					</ol> 
									
		</div>
		 <div id="page-inner">
<div class="row">

	<div class="col-md-12 text-right">
		<div style="margin-bottom:10px;">
		<?php echo anchor(site_url('admin/user/tambah'),
			'<i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah User',
			'class="btn btn-primary"');?>
			
		</div>
	</div>
</div>
<div class="row">
	<table id="example" class="table table-striped table-bordered">
		<thead>
			<tr>
				<th width="50px">Kode</th>
				<th width="100px">Nama</th>
				<th width="200px">Foto Profil</th>
				<th width="120px">Email</th>
				<th width="100px">No Hp</th>
				<th width="100px">Jenis Kelamin</th>
				<th width="100px">Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($data_user as $key => $row) {?>
				<tr>
					<td><?php echo $row->kode_user; ?></td>
					<td><?php echo $row->password; ?></td>
					<td>
						<?php

									$encoded_image = base64_encode($row->foto_profil);
									echo '<img src="data:image/jpeg;base64,'.base64_decode($encoded_image).'" style="width:200px;height:180px;">';
					
					 ?></td>
					</td>
					<td><?php echo $row->email; ?></td>
					<td><?php echo $row->no_hp; ?></td>
					<td><?php echo $row->jk; ?></td>
					
			<td>
				<?php echo anchor(site_url('admin/user/delete/'.$row->kode_user),
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