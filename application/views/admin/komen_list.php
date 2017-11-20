<?php $this->load->view('admin/header'); ?>

<div class="header"> 
	<h1 class="page-header" style="margin-bottom: -20px">
		
	</h1>
	<ol class="breadcrumb">
		<li><a href="#">Home</a></li>
		<li class="active">Table Komentar</a></li>
	</ol> 
	
</div>
<div id="page-inner">

	<div class="row">
		<table id="example" class="table table-striped table-bordered" >
			<thead>
				<tr>
					<th style="width:50px">Kode berita</th>
					<th style="width:100px">Kode komen</th>
					<th style="width:200px">Nama</th>
					<th style="width:450px">Komentar</th>
					<th style="width:80px">Tanggal</th>
					<th style="width:100px">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($data_komen as $key => $row) {?>
				<tr>
					<td><?php echo $row->kode_berita; ?></td>
					<td><?php echo $row->kode_komen; ?></td>
					<td><?php echo $row->username; ?></td>
					<td><?php
 							$str = parse_smileys($row->komentar, 'http://localhost/uts_fw/assets2/smileys/');
 							echo $str;
					 	?></td>
					<td><?php echo $row->tanggal_komen; ?></td>
					
			<td>
				<?php echo anchor(site_url('admin/berita/delete_komen/'.$row->kode_komen), 
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