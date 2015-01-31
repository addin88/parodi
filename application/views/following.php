
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="subnav">
                                <ul class="nav navbar-nav">
                                    <li><a href=""><i class="fa fa-fw icon-ship-wheel"></i> Tambahakan Following </a>
                                    </li>
                                </ul>

                            </div>
                            <!-- /.navbar-collapse -->
                        </div>
                    </nav>
                    <div class="container-fluid">

                        <div class="row" data-toggle="isotope">
                        <?php foreach($fol_kawan as $key => $r){
																	$file= 'assets/images/kawan/avatar/'.$r['foto'];	
							if(file_exists($file))
							{
								$avatar=$r['foto'];
							}
							else {
								
								$avatar='default.jpg';
							}
							?>
                            <form action="insert_following" method="post">
                            <div class="col-md-6 col-lg-4 item">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="media">
                                            <div class="pull-left">
                                           <img src="<?php echo  base_url();?>assets/images/kawan/avatar/<?php echo $avatar;?>" alt="people" class="media-object img-circle" />
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading margin-v-5"><a href="#"><?php echo $r['nama']?></a>
                                                 <input type="hidden" class="form-control" name="kawan" value="<?php echo $r['id']?>"/>
                                                </h4>
                                                <div class="profile-icons">
                                                    <span><i class="fa fa-mortar-board fa-fw"></i> 372</span>
                                                    <span><i class="md md-star-outline"></i> 43</span>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
								
                                    <div class="panel-footer">
                                                                                        <span class="input-group-btn">
                                                        <button type="submit" name="save" class="btn btn-default">
         
     
       Follow <i class="fa fa-share"></i>
    </button>
                 
                </span>
                                        
                                    </div>
                                </div>
                            </div>
                            </form>
                            <?php } ?>

                        </div>
                    </div>
                </div>
                <!-- /st-content-inner -->
            </div>
            <!-- /st-content -->
        </div>
        <!-- /st-pusher -->
