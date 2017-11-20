<?php $this->load->view('admin/header'); ?>

<div class="header"> 
	<h1 class="page-header" style="margin-bottom: -20px">

	</h1>
	<ol class="breadcrumb">
		<li><a href="#">Home</a></li>
		<li class="active">Table Saran</a></li>
	</ol> 

</div>
<div id="page-inner">
<div class="row">
	<table id="example" class="table table-striped table-bordered" >
		<thead>
			<tr>
				<th width="30px">Kode</th>
				<th width="50px">Nama</th>
				<th width="80px">Email</th>
				<th width="200px">Saran</th>
				<th width="80px">Tanggal</th>
				<th width="20px">Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($data_saran as $key => $row) {?>
			<tr>
				<td><?php echo $row->kode; ?></td>
				<td><?php echo $row->nama; ?></td>
				<td><?php echo $row->email; ?></td>
				<td><?php echo $row->saran; ?></td>
				<td><?php echo $row->tanggal; ?></td>
				<td>
				<?php echo anchor(site_url('admin/guest/delete/'.$row->kode),
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