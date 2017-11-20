<?php $this->load->view('user/header');?>

<div class="row">
	<div class="col-md-12">
		<!-- Tabs -->
		<div class="col-lg-6 col-md-12 col-sm-12" style="margin-left: 230px;">
			<div class="tc-tabs-holder">


				<!-- tabs -->
				<div class="tc-tabs">
					<ul class="tc-tabs-list">
						<li style="width: 196px; text-align: center" class="active"><a data-target="#tab1" data-toggle="tab">
							<i class="fa fa-plus-circle" aria-hidden="true"></i>  New Message</a>
						</li>
						<li style="width: 196px; text-align: center">
							<a data-target="#tab2" data-toggle="tab"><i class="fa fa-inbox" aria-hidden="true"></i>  Inbox</a>
						</li>
						<li style="width: 196px; text-align: center"><a data-target="#tab3" data-toggle="tab">
							<i class="fa fa-paper-plane" aria-hidden="true"></i>  Sent</a>
						</li>
						<li style="width: 195px; text-align: center"><a data-target="#tab4" data-toggle="tab">
							<i class="fa fa-trash" aria-hidden="true"></i>  Trash</a>
						</li>
					</ul>


					<div class="tab-content" style="margin-right: 450px">
						
						<div class="tab-pane active" id="tab1">
							<div class="best-servics-content">
								<div class="best-servics-detail" style="margin-left:15px">
									<form action="<?php echo site_url('user/pesan/tambah_aksi'); ?>" method="post">
										<div class="form-group">
											<label>To:</label>
											<input style="width:710px" type="text" class="form-control" name="penerima" placeholder="Masukkan tujuan" value="<?php echo $sender; ?>" required>
										</div>
										<div class="form-group">
											<label>Subject:</label>
											<input style="width:710px" type="text" class="form-control"  name="subject" placeholder="Masukkan subject" value="<?php echo $subject; ?>">
										</div>
										<div class="form-group">
											<label>Isi:</label>
											<textarea style="width:710px" id="comments" class="form-control"  name="isi" placeholder="Masukkan isi pesan" required rows=12></textarea>
										</div>
										<?php $this->load->view('smiley_view'); ?>
										<input type="hidden" name="sender" value="<?php echo $this->session->userdata('username'); ?>">
										<button type="submit" class='pink-btn'>Kirim</button>
										<a href="<?php echo site_url('user/pesan')?>" class="btn btn-default" style="padding-right: 60px; padding-left: 60px; padding-top: 13px; padding-bottom: 13px">Cancel</a> 
									</form>
								</div>
							</div>
						</div>


						<div class="tab-pane" id="tab2" style="height: 575px">
							<div class="best-servics-content">
								<div class="best-servics-detail">
									<table class="table table-striped table-bordered" style="color: black">

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
												<td style="text-align:center"><?php echo anchor(site_url('user/pesan/balas/'.$row->sender.'/'.$row->subject),
													'<i class="fa fa-paper-plane" aria-hidden="true"></i>',
													'class="btn btn-success"'); ?>
													<?php echo anchor(site_url('user/pesan/trash_inbox/'.$row->kode_pesan), 
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


							<div class="tab-pane" id="tab3" style="height: 575px">
								<div class="best-servics-content">
									<div class="best-servics-detail">
										<table class="table table-striped table-bordered" style="color: black">
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
													<?php echo anchor(site_url('user/pesan/trash_sent/'.$row->kode_pesan),
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


							<div class="tab-pane" id="tab4" style="height: 575px">
								<div class="best-servics-content">
									<div class="best-servics-detail">
										<table class="table table-striped table-bordered" style="color: black">
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
													<?php echo anchor(site_url('user/pesan/delete/'.$row->kode_pesan),
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
				</div>
			</div>
			<!-- Tabs -->
		</div>
	</div>

	<?php $this->load->view('user/footer'); ?>