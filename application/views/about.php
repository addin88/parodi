                            <div class="collapse navbar-collapse" id="subnav">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="<?php echo base_url();?>Home"><i class="fa fa-fw icon-ship-wheel"></i> Timeline</a>
                                    </li>
                                    <li><a href="<?php echo base_url();?>About"><i class="fa fa-fw icon-user-1"></i> Gue</a>
                                    </li>
                                    <li><a href="<?php echo base_url();?>Kawan"><i class="fa fa-fw fa-users"></i> Mas Brow</a>
                                    </li>
                                </ul>
                                <ul class="nav navbar-nav navbar-right hidden-xs">
                                    <li><a href="#sidebar-chat" data-toggle="sidebar-menu" data-effect="st-effect-1">Chat <i class="fa fa-fw fa-comment-o"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.navbar-collapse -->
                        </div>
                    </nav>
                    
                    <div class="cover overlay cover-image-full height-300-lg"> <img src="<?php echo base_url()?>assets/images/cover/<?php echo $cover;?>" alt="cover" />
                        <div class="overlay overlay-full">
                            <div class="v-top">
                                <a href="#" class="btn btn-cover"><i class="fa fa-pencil"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="panel panel-default share">
                            <div class="input-group">
                                <div class="input-group-btn">
                                    <a class="btn btn-primary" href="#"><i class="fa fa-envelope"></i> Send</a>
                                </div>
                                <!-- /btn-group -->
                                <input type="text" class="form-control share-text" placeholder="Write message..." />
                            </div>
                            <!-- /input-group -->
                        </div>
                        <div class="tabbable">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home" data-toggle="tab"><i class="fa fa-fw fa-picture-o"></i> Photos</a>
                                </li>
                                <li class=""><a href="#profile" data-toggle="tab"><i class="fa fa-fw fa-folder"></i> Albums</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="home">
                                    <img src="images/place1.jpg" alt="image" />
                                    <img src="images/place2.jpg" alt="image" />
                                    <img src="images/food1.jpg" alt="image" />
                                </div>
                                <div class="tab-pane fade" id="profile">
                                    <p>Deskripsi Tentang Gue Ada Ye</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading panel-heading-gray">
                                        <a href="#" class="btn btn-white btn-xs pull-right"><i class="fa fa-pencil"></i></a>
                                        <i class="fa fa-fw fa-info-circle"></i> Data Gue
                                    </div>
                                    <div class="panel-body">
                                        <ul class="list-unstyled profile-about margin-none">
                                            <li class="padding-v-5">
                                                <div class="row">
                                                    <div class="col-sm-4"><span class="text-muted">Lahir Ke Bumi</span>
                                                    </div>
                                                    <div class="col-sm-8"><?php echo  $tgllhr;?></div>
                                                </div>
                                            </li>
                                            <li class="padding-v-5">
                                                <div class="row">
                                                    <div class="col-sm-4"><span class="text-muted">Gawean</span>
                                                    </div>
                                                    <div class="col-sm-8"><?php echo $pekerjaan?></div>
                                                </div>
                                            </li>
                                            <li class="padding-v-5">
                                                <div class="row">
                                                    <div class="col-sm-4"><span class="text-muted">Jenis Gue</span>
                                                    </div>
                                                    <div class="col-sm-8"><?php echo $jk?></div>
                                                </div>
                                            </li>
                                            <li class="padding-v-5">
                                                <div class="row">
                                                    <div class="col-sm-4"><span class="text-muted">Tempat Hidup</span>
                                                    </div>
                                                    <div class="col-sm-8"><?php echo  $alamat?></div>
                                                </div>
                                            </li>
                                            <li class="padding-v-5">
                                                <div class="row">
                                                    <div class="col-sm-4"><span class="text-muted">Point</span>
                                                    </div>
                                                    <div class="col-sm-8"><?php echo  $point;?></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading panel-heading-gray">
                                        <div class="pull-right">
                                            <a href="#" class="btn btn-primary btn-xs">Add <i class="fa fa-plus"></i></a>
                                        </div>
                                        <i class="icon-user-1"></i> Mas Brow
                                    </div>
                                    <div class="panel-body">
                                        <ul class="img-grid">
                                        <?php foreach($ft_kawan as $key => $r){
										$file= 'assets/images/kawan/avatar/'.$r['foto'];	
							if(file_exists($file))
							{
								$avatar=$r['foto'];
							}
							else {
								
								$avatar='default.jpg';
							}											
											?>
                                            <li >
                                                <a href="<?php echo base_url();?>Home/kawan/<?php echo $r['id']?>/<?php echo $r['nama']?>">
                          <img src="<?php echo base_url()?>assets/images/kawan/bavatar/<?php echo $avatar?>" alt="image" />
                                                </a>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading panel-heading-gray">
                                <i class="fa fa-bookmark"></i> Bookmarks
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                <?php foreach ($posting as $key => $r){?>
                                    <div class="col-md-4">
                                         <div class="panel panel-default">
                                            <div class="panel-body">
                                                
                                                <div class="text-muted">
                                                    <small><i class="fa fa-calendar"></i> <?php echo $r['tgl']?></small>
                                                </div>
                                            </div>
                                            <a href="#">
                                                <img src="<?php echo base_url();?>assets/images/posting/<?php echo $r['file']?>" alt="image" class="img-responsive" width="100%" />
                                            </a>
                                            <div class="panel-body">
                                                <p><?php echo $r['kalimat']?></p>
                                                <div>
                                                    <div class="pull-right">
                                                        <a href="#" class="btn btn-primary btn-xs">Lanjut</a>
                                                    </div>
                                                    <a href="#" class="text-muted"> <i class="fa fa-comments"></i> <?php echo  $r['view']?></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /st-content-inner -->
            </div>
            <!-- /st-content -->
        </div>
        <!-- /st-pusher -->
   