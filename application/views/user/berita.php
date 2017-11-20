 <?php $this->load->view('user/header'); ?>

 <div class="row">
    <div class="col-md-12">


        <!-- Main Content -->
        <main class="main-content white-bg">
            <div class="container">
                <div class="row">

                    <!-- Blog Full with sidebar -->
                    <div class="col-lg-8 col-md-8 col-sm-6">
                        <div class="Blog-full-width">           

                                <?php foreach ($data_berita as $key => $row) { ?>
                            
                                    <!-- Post Img -->
                                    <div class="col-sm-12" style="margin-top: 50px">
                                        <!--<?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row->gambar).'" style="width:700px; height:500px;"/>' ?> -->
                                        <?php
                                            $encoded_image = base64_encode($row->gambar);
                                            echo '<img src="data:image/jpeg;base64,'.base64_decode($encoded_image).'" style="width:700px;height:500px;">' ?>
                                            </div>
                                    <!-- Post Img -->

                                    <!-- Post Detail -->
                                    <div class="col-sm-12" style="margin-top: -40px">
                                        <div class="blog-post-detail">
                                            <div class="center-detail-inner">
                                                <h3><?php echo $row->judul; ?></h3>
                                                <div>
                                                    <ul class="meta-post">
                                                        <li><i class="fa fa-user"></i>Admin</li>
                                                        <li><i class="fa fa-clock-o"></i><?php echo $row->tanggal_berita; ?></li>
                                                        <li><i class="fa fa-comment"></i><?php echo $row->jmlkomen; ?> Komentar</li>
                                                    </ul>
                                                </div>
                                                <p><?php echo $row->teks; ?>...</p>
                                                <a class="pink-btn" href="<?php echo (site_url('user/berita/readme/'.$row->kode_berita)); ?>">read more</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Post Detail -->

                                
                                    <?php } ?>
                               
                        </div>
                    </div>
                    <!-- Blog Full with sidebar -->

                    <!-- Aside -->
                    <aside class="col-lg-4 col-md-5 col-sm-6">

                       

                       <!-- Recent Post -->
                                <div class="aside-widget" style="margin-top: 50px">
                                    <h3>Popular Post</h3>
                                    <div class="recent-post">
                                        <ul>
                                            <li>
                                                <span class="recent-post-img"><img src="<?php echo base_url('assets2/foto/xieyi.jpg');?>" style="width:70px; height: 75px"></span>
                                                <div class="recent-post-detail">
                                                    <h5><a href="<?php echo site_url('user/berita/readme/'.'19'); ?>">Xieyi</a></h5>
                                                    <span class="recent-post-date"><i class="fa fa-clock-o"></i>2017-07-18</span>
                                                    <p>Teknik lukisan Xieyi</p>
                                                </div>
                                            </li>
                                            <li>
                                                <span class="recent-post-img"><img src="<?php echo base_url('assets2/foto/kaligrafi.jpg');?>" style="width:70px; height: 75px"></span>
                                                <div class="recent-post-detail">
                                                    <h5><a href="<?php echo site_url('user/berita/readme/'.'21'); ?>">Kaligrafi Cina</a></h5>
                                                    <span class="recent-post-date"><i class="fa fa-clock-o"></i>2017-07-19</span>
                                                    <p>Sejarah Kaligrafi Cina</p>
                                                </div>
                                            </li>
                                            <li>
                                                <span class="recent-post-img"><img src="<?php echo base_url('assets2/foto/marouflage.jpg');?>" style="width:70px; height: 75px"></span>
                                                <div class="recent-post-detail">
                                                    <h5><a href="<?php echo site_url('user/berita/readme/'.'20'); ?>">Marouflage</a></h5>
                                                    <span class="recent-post-date"><i class="fa fa-clock-o"></i>2017-07-15</span>
                                                    <p>Bahan lukisan Marouflage</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Recent Post -->
                      
                        <!-- Tags -->
                        <div class="aside-widget">
                            <h3>Tags</h3>
                            <div class="tags-list">
                                <ul>
                                    <li><a href="#">China</a></li>
                                    <li><a href="#">Budaya</a></li>
                                    <li><a href="#">Kaligrafi</a></li>
                                    <li><a href="#">Teknik</a></li>
                                    <li><a href="#">Sejarah</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Tags -->

                    </aside>
                    <!-- Aside -->

                </div>
            </div>
        </main>
        <!-- Main Content -->
      
    </div>
</div>

<?php $this->load->view('user/footer'); ?>