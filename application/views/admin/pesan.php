<?php $this->load->view('admin/header');?>

<div class="header"> 
	<h1 class="page-header" style="margin-bottom: -20px">

	</h1>
	<ol class="breadcrumb">
		<li><a href="#">Home</a></li>
		<li class="active">Pesan</a></li>
	</ol> 

</div>
<div id="page-inner">

	<div class="row">
		<div class="col-md-12 col-sm-6">
			<div class="panel panel-default">
				<div class="panel-heading">

				</div>
				<div class="panel-body">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#new" data-toggle="tab"><i class="fa fa-plus-circle" aria-hidden="true"></i>  New Message</a>
						</li>
						<li class=""><a href="#inbox" data-toggle="tab"><i class="fa fa-inbox" aria-hidden="true"></i>  Inbox</a>
						</li>
						<li class=""><a href="#sent" data-toggle="tab"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Sent</a>
						</li>
						<li class=""><a href="#trash" data-toggle="tab"><i class="fa fa-trash" aria-hidden="true"></i>  Trash</a>
						</li>
					</ul>

					<div class="tab-content">
						<div class="tab-pane fade active in" id="new">
							<form action="<?php echo site_url('admin/pesan/tambah_aksi'); ?>" method="post">
								<div class="form-group">
									<label style="margin-top: 20px">To:</label>
									<input style="width:720px" type="text" class="form-control" name="penerima" placeholder="Masukkan tujuan" value="<?php echo $sender; ?>" required>
								</div>
								<div class="form-group">
									<label>Subject:</label>
									<input style="width:720px" type="text" class="form-control"  name="subject" placeholder="Masukkan subject" value="<?php echo $subject; ?>">
								</div>
								<div class="form-group">
									<label>Isi:</label>
									<textarea style="width:720px" id="comments" class="form-control"  name="isi" placeholder="Masukkan isi pesan" required rows=12></textarea>
								</div>
								<?php $this->load->view('smiley_view'); ?>
								<input type="hidden" name="sender" value="<?php echo $this->session->userdata('username'); ?>">
								<button type="submit" class='btn' style="background-color: #FF6666; color: white">Kirim</button>
								<a href="<?php echo site_url('admin/pesan')?>" class="btn btn-default">Cancel</a> 
							</form>
						</div>
						<div class="tab-pane fade" id="inbox">
							<table class="table table-striped table-bordered" style="color: black;margin-top: 20px">

								<thead>
									<tr>
										<th style="padding-right: 70px;">Dari</th>
										<th style="padding-right: 80px">Subject</th>
										<th style="padding-right: 260px">Isi</th>
										<th style="padding-right: 50px">Tanggal</th>
										<th style="padding-right: 65px">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($data_inbox as $key => $row) { ?>
									<tr>
										<td><?php echo $row->sender; ?></td>
										<td><?php echo $row->subject; ?></td>
										<td>
													<?php
 													$str = parse_smileys($row->isi, 'http://localhost/uts_fw/assets2/smileys/');
 													 echo $str; ?>
												</td>	
										<td><?php echo $row->tanggal; ?></td>
										<td style="text-align:center"><?php echo anchor(site_url('admin/pesan/balas/'.$row->sender.'/'.$row->subject),
											'<i class="fa fa-paper-plane" aria-hidden="true"></i>',
											'class="btn btn-success"'); ?>
										<?php echo anchor(site_url('admin/pesan/trash_inbox/'.$row->kode_pesan), 
											'<i class="fa fa-trash" aria-hidden="true"></i>',
											'class="btn btn-danger"'); ?>
										</td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
						<div class="tab-pane fade" id="sent">
							<table class="table table-striped table-bordered" style="color: black;margin-top: 20px">
								<thead>
									<tr>
										<th style="padding-right: 70px;">Kepada</th>
										<th style="padding-right: 80px">Subject</th>
										<th style="padding-right: 265px">Isi</th>
										<th style="padding-right: 60px">Tanggal</th>
										<th style="padding-right: 30px">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($data_sent as $key => $row) { ?>
									<tr>
										<td><?php echo $row->penerima; ?></td>
										<td><?php echo $row->subject; ?></td>
										<td>
													<?php
 													$str = parse_smileys($row->isi, 'http://localhost/uts_fw/assets2/smileys/');
 													 echo $str; ?>
												</td>
										<td><?php echo $row->tanggal; ?></td>
										<td style="text-align:center">
											<?php echo anchor(site_url('admin/pesan/trash_sent/'.$row->kode_pesan),
												'<i class="fa fa-trash" aria-hidden="true"></i>',
												'class="btn btn-danger"'); ?>
											</td>
										</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
							<div class="tab-pane fade" id="trash">
								<table class="table table-striped table-bordered" style="color: black;margin-top: 20px">
									<thead>
										<tr>
											<th style="padding-right: 50px">Keterangan</th>
											<th style="padding-right: 75px">Subject</th>
											<th style="padding-right: 265px">Isi</th>
											<th style="padding-right: 60px">Tanggal</th>
											<th style="padding-right: 30px">Aksi</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($data_trash as $key => $row) { ?>
										<tr>
											<?php if ($row->keterangan="From Inbox" && $row->sender!=$this->session->userdata('username')) { ?>
											<td>Dari <?php echo $row->sender; ?></td>
											<?php } else{ ?>
											<td>Kepada <?php echo $row->penerima; ?></td>
											<?php } ?>
											<td><?php echo $row->subject; ?></td>
											<td>
													<?php
 													$str = parse_smileys($row->isi, 'http://localhost/uts_fw/assets2/smileys/');
 													 echo $str; ?>
												</td>
											<td><?php echo $row->tanggal; ?></td>
											<td style="text-align:center">
												<?php echo anchor(site_url('admin/pesan/delete/'.$row->kode_pesan),
													'<i class="fa fa-trash" aria-hidden="true"></i>',
													'class="btn btn-danger"'); ?>
												</td>
											</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>


				<?php $this->load->view('admin/footer'); ?>