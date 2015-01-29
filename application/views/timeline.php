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
                                    <li>
                                    
                                    <a href="#sidebar-chat" data-toggle="sidebar-menu" data-effect="st-effect-1">Chat <i class="fa fa-fw fa-comment-o"></i></a>
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
                        <div class="timeline row" data-toggle="isotope">

                            <div class="col-xs-12 col-md-6 col-lg-4 item">
                                <div class="timeline-block">
                                    <div class="panel panel-default share clearfix-xs">
                                        <div class="panel-heading panel-heading-gray title">
                                            What&acute;s new
                                        </div>
                                        <div class="panel-body">
                                            <textarea name="status" class="form-control share-text" rows="3" placeholder="Share your status..."></textarea>
                                        </div>
                                        <div class="panel-footer share-buttons">
                                            <a href="#"><i class="fa fa-map-marker"></i></a>
                                            <a href="#"><i class="fa fa-photo"></i></a>
                                            <a href="#"><i class="fa fa-video-camera"></i></a>
                                            <button type="submit" class="btn btn-primary btn-xs pull-right display-none" href="#">Post</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
<?php
foreach($posting as $key => $r){
	$idpost=$r['id'];
?>
                            <div class="col-xs-12 col-md-6 col-lg-4 item">
                                <div class="timeline-block">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="media">
                                                <a href="<?php echo base_url();?>Home/kawan/<?php echo $r['kawan']?>/<?php echo $r['nama']?>" class="pull-left"> <img src="<?php echo base_url()?>assets/images/kawan/avatar/<?php echo $r['foto']?>" class="media-object" height="50" width="50">
                                                </a>
                                                <div class="media-body">
                                                   
                                                    
                                                    <a href="<?php echo base_url();?>Home/kawan/<?php echo $r['kawan']?>/<?php echo $r['nama']?>"><?php echo $r['nama']?></a></li><span class="fa fa-mortar-board fa-fw"> </span>  17 <span class="md md-star-outline"> </span>  1.000.000
                                                    
                                                </div>
                                            </div>
                                        </div> <img src="<?php echo base_url()?>assets/images/posting/<?php echo $r['file']?>" class="img-responsive" width="100%" height="100%">
                                        <ul class="icon-list icon-list-block">
                                            <li><i class="fa fa-calendar-o"></i> <?php echo $r['tgl']?> </li>
                                        </ul>                                                   
   
                                                   <ul class="icon-list">
                                                        
                                                    <li><i class="fa fa-eye fa-fw"></i> 500 Liat</li>
                                                    <li><i class="fa fa-thumbs-o-up fa-fw"></i> 420 Jos</li>
                                                    <li><i class="md md-forum md-fw"></i> 300 Komentar</li>
                                                </ul>
                                        <ul class="comments">
                                            <li>
                                            <?php
											$Q = $this->db->query("select a.*,b.foto,b.nama from 
komentar a, kawan b
where a.kawan=b.id and a.posting=$idpost");
											if($Q->num_rows() > 0){
												foreach($Q->result_array() as $c){
											?>
                                                <div class="media">
                                                    <a href="<?php echo base_url();?>Home/kawan/<?php echo $c['kawan']?>/<?php echo $c['nama']?>" class="pull-left"> <img src="<?php echo base_url()?>assets/images/kawan/avatar/<?php echo $c['foto'];?>" class="media-object" width="50" height="50">
                                                    </a>
                                                    <div class="pull-right dropdown" data-show-hover="li">
                                                        <a href="#" data-toggle="dropdown" class="toggle-button">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li><a href="#">Edit</a>
                                                            </li>
                                                            <li><a href="#">Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="media-body">
                                                        <a href="<?php echo base_url();?>Home/kawan/<?php echo $c['kawan']?>/<?php echo $c['nama']?>" class="comment-author"><?php echo $c['nama'];?></a>
                                                        <span><?php echo $c['komentar'];?></span>
                                                        <div class="comment-date"><?php echo  $c['tgl']?></div>
                                                    </div>
                                                </div>
                                            </li>

                                            <?php }} ?>
                                            <form action="Home/komentar" method="post">
                                                 <li class="comment-form">
                                                <div class="input-group">
                                                <input type="hidden" class="form-control" name="posting" value="<?php echo $idpost?>"/>
                                                    <input type="text" class="form-control" name="komentar"/>
                                                    <span class="input-group-btn">
                                                        <button type="submit" name="save" class="btn btn-default">
         
     
       <i class="fa fa-photo"></i>
    </button>
                 
                </span>
                                                </div>
                                            </li>
                                            </form>
                                        </ul>
                                    </div>
                                </div>
                            </div>
 
 <?php } ?>
 
                        </div>
                    </div>
                </div>
                <!-- /st-content-inner -->
            </div>
            <!-- /st-content -->
        </div>
        <!-- /st-pusher -->
