<!DOCTYPE html>
<html class="st-layout ls-top-navbar ls-bottom-footer show-sidebar sidebar-l2" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Kacau Sosial Media</title>

    <link href="<?php echo base_url();?>assets/css/vendor.min.css" rel="stylesheet">
    <!-- <link href="<?php echo base_url();?>assets/css/theme.bundle.min.css" rel="stylesheet"> -->
    <link href="<?php echo base_url();?>assets/css/theme-core.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/module-essentials.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/css/module-layout.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/css/module-sidebar.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/css/module-sidebar-skins.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/css/module-navbar.min.css" rel="stylesheet" />
    <!-- <link href="<?php echo base_url();?>assets/css/module-media.min.css" rel="stylesheet" /> -->
    <link href="<?php echo base_url();?>assets/css/module-timeline.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/css/module-cover.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/css/module-chat.min.css" rel="stylesheet" />
    <!-- <link href="<?php echo base_url();?>assets/css/module-charts.min.css" rel="stylesheet" /> -->
    <link href="<?php echo base_url();?>assets/css/module-maps.min.css" rel="stylesheet" />
    <!-- <link href="<?php echo base_url();?>assets/css/module-colors-alerts.min.css" rel="stylesheet" /> -->
    <!-- <link href="<?php echo base_url();?>assets/css/module-colors-background.min.css" rel="stylesheet" /> -->
    <!-- <link href="<?php echo base_url();?>assets/css/module-colors-buttons.min.css" rel="stylesheet" /> -->
    <!-- <link href="<?php echo base_url();?>assets/css/module-colors-calendar.min.css" rel="stylesheet" /> -->
    <!-- <link href="<?php echo base_url();?>assets/css/module-colors-progress-bars.min.css" rel="stylesheet" /> -->
    <!-- <link href="<?php echo base_url();?>assets/css/module-colors-text.min.css" rel="stylesheet" /> -->

    <!--[if lt IE 9]>
    <script src="<?php echo base_url()?>assets/https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="<?php echo base_url()?>assets/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <!-- Wrapper required for sidebar transitions -->
    <div class="st-container">
        <!-- Fixed navbar -->
        <div class="navbar navbar-main navbar-primary navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="#sidebar-menu" data-effect="st-effect-1" data-toggle="sidebar-menu" class="toggle pull-left visible-xs"><i class="fa fa-ellipsis-v"></i></a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#sidebar-chat" data-toggle="sidebar-menu" data-effect="st-effect-1" class="toggle pull-right visible-xs"><i class="fa fa-comments"></i></a>
                    <a class="navbar-brand" href="<?php echo base_url();?>">kOcAk</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="main-nav">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo base_url()?>Home">Timeline</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Page <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li class="dropdown-header">Public User Pages</li>
                                <li class="active"><a href="<?php echo base_url();?>Home">Timeline</a>
                                </li>
                                <li><a href="<?php echo base_url();?>Home">About</a>
                                </li>
                                <li><a href="<?php echo base_url();?>Home">Friends</a>
                                </li>
                                <li class="dropdown-header">Private User Pages</li>
                                <li><a href="<?php echo base_url();?>Home">Messages</a>
                                </li>
                                <li><a href="<?php echo base_url();?>Home">Profile</a>
                                </li>
                                <li><a href="<?php echo base_url();?>Home">Timeline</a>
                                </li>
                                <li><a href="<?php echo base_url();?>Home">Friends</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="<?php echo base_url();?>Home">Top Mas Brow</a>
                        </li>
                        <li class="hidden-sm" data-toggle="tooltip" data-placement="bottom" title="A few Color Examples. Download includes CSS Files for all color examples & the tools to Generate any Color combination. This Color-Switcher is for previewing purposes only.">

                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="hidden-xs">
                            <a href="#sidebar-chat" data-toggle="sidebar-menu" data-effect="st-effect-1">
                                <i class="fa fa-comments"></i>
                            </a>
                        </li>
                        <!-- User -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle user" data-toggle="dropdown"> <img src="<?php echo base_url()?>assets/images/kawan/bavatar/<?php echo  $avatar;?>" alt="Gue" class="img-circle" width="40" /> <?php echo $nama;?> <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<?php echo base_url();?>About">Profile</a>
                                </li>
                                <li><a href="<?php echo base_url();?>Home">Messages</a>
                                </li>
                                <li><a href="<?php echo base_url();?>Login/logout">Logout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
        </div>
        <!-- Sidebar component with st-effect-1 (set on the toggle button within the navbar) -->
        <div class="sidebar left sidebar-size-2 sidebar-offset-0 sidebar-visible-desktop sidebar-visible-mobile sidebar-skin-dark" id="sidebar-menu">
            <div data-scrollable>
                <div class="sidebar-block">
                    <div class="profile"> <img src="<?php echo base_url()?>assets/images/kawan/bavatar/<?php echo $avatar;?>" alt="people" class="img-circle" />
                        <h4><?php echo $nama;?></h4>
                    </div>
                </div>
                <div class="category">About</div>
                <div class="sidebar-block">
                    <ul class="list-about">
                        <li><i class="fa fa-map-marker"></i> Indonesia</li>
                        <li><i class="fa fa-link"></i> <a href="#">Kocak</a>
                        </li>
                        <li><i class="fa fa-twitter"></i> <a href="#">/Kocak</a>
                        </li>
                    </ul>
                </div>
                <div class="category">Kawan</div>
              <div class="sidebar-block">
                    <div class="sidebar-photos">
                        <ul>
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
                            <li>
                                <a href="<?php echo base_url();?>Home/kawan/<?php echo $r['id']?>/<?php echo $r['nama']?>"> <img src="<?php echo base_url()?>assets/images/kawan/avatar/<?php echo $avatar;?>" />
                                </a>
                            </li>
                            <?php }?>
                        </ul>
                        <a href="<?php echo  base_url()?>Kawan" class="btn btn-primary btn-xs">view all</a>
                    </div>
                </div>
 </div>
        </div>
        <!-- Sidebar component with st-effect-1 (set on the toggle button within the navbar) -->
        <div class="sidebar sidebar-chat right sidebar-size-2 sidebar-offset-0 chat-skin-white" id=sidebar-chat>
            <div class="split-vertical">
                <div class="chat-search">
                    <input type="text" class="form-control" placeholder="Search" />
                </div>
                <ul class="chat-filter nav nav-pills ">
                    <li class="active"><a href="#" data-target="li">All</a>
                    </li>
                    <li><a href="#" data-target=".online">Online</a>
                    </li>
                    <li><a href="#" data-target=".offline">Offline</a>
                    </li>
                </ul>
                <div class="split-vertical-body">
                    <div class="split-vertical-cell">
                        <div data-scrollable>
                            <ul class="chat-contacts">
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
                                <li class="online" data-user-id="1">
                                    <a href="#">
                                        <div class="media">
                                            <div class="pull-left">
                                                <span class="status"></span> <img src="<?php echo base_url()?>assets/images/kawan/avatar/<?php echo $avatar?>" width="40" class="img-circle" />
                                            </div>
                                            <div class="media-body">
                                                <div class="contact-name"><?php echo $r['nama']?></div>
                                                <small>"Online"</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script id="chat-window-template" type="text/x-handlebars-template">
            <div class="panel panel-default">
                <div class="panel-heading" data-toggle="chat-collapse" data-target="#chat-bill">
                    <a href="#" class="close"><i class="fa fa-times"></i></a>
                    <a href="#">
                        <span class="pull-left"> <img src="<?php echo base_url()?>assets/{{ user_image }}" width="40">
                </span>
                        <span class="contact-name">{{user}}</span>
                    </a>
                </div>
                <div class="panel-body" id="chat-bill">
                    <div class="media">
                        <div class="media-left"> <img src="<?php echo base_url()?>assets/{{ user_image }}" width="25" class="img-circle" alt="people" />
                        </div>
                        <div class="media-body">
                            <span class="message">Feeling Groovy?</span>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left"> <img src="<?php echo base_url()?>assets/{{ user_image }}" width="25" class="img-circle" alt="people" />
                        </div>
                        <div class="media-body">
                            <span class="message">Yep.</span>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left"> <img src="<?php echo base_url()?>assets/{{ user_image }}" width="25" class="img-circle" alt="people" />
                        </div>
                        <div class="media-body">
                            <span class="message">This chat window looks amazing.</span>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left"> <img src="<?php echo base_url()?>assets/{{ user_image }}" width="25" class="img-circle" alt="people" />
                        </div>
                        <div class="media-body">
                            <span class="message">Thanks!</span>
                        </div>
                    </div>
                </div>
                <input type="text" class="form-control" placeholder="Type message..." />
            </div>
        </script>
        <div class="chat-window-container"></div>
        <!-- sidebar effects OUTSIDE of st-pusher: -->
        <!-- st-effect-1, st-effect-2, st-effect-4, st-effect-5, st-effect-9, st-effect-10, st-effect-11, st-effect-12, st-effect-13 -->
        <!-- content push wrapper -->
        <div class="st-pusher" id="content">
            <!-- sidebar effects INSIDE of st-pusher: -->
            <!-- st-effect-3, st-effect-6, st-effect-7, st-effect-8, st-effect-14 -->
            <!-- this is the wrapper for the content -->
            <div class="st-content">
                <!-- extra div for emulating position:fixed of the menu -->
                <div class="st-content-inner">
                    <nav class="navbar navbar-subnav navbar-static-top margin-bottom-none" role="navigation">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#subnav">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="fa fa-ellipsis-h"></span>
                                </button>
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->

<?php echo  $this->load->view($page)?>
        <!-- Footer -->
        <div class="footer">
            <strong>kOcAk</strong>Copyright 2015
        </div>
        <!-- // Footer -->
    </div>
    <!-- /st-container -->
    <!-- Inline Script for colors and config objects; used by various external scripts; -->
    <script>
    var colors = {
        "danger-color": "#e74c3c",
        "success-color": "#81b53e",
        "warning-color": "#f0ad4e",
        "inverse-color": "#2c3e50",
        "info-color": "#2d7cb5",
        "default-color": "#6e7882",
        "default-light-color": "#cfd9db",
        "purple-color": "#9D8AC7",
        "mustard-color": "#d4d171",
        "lightred-color": "#e15258",
        "body-bg": "#f6f6f6"
    };
    var config = {
        debug: true,
        theme: "social-1",
        skins: {
            "default": {
                "primary-color": "#16ae9f"
            },
            "orange": {
                "primary-color": "#e74c3c"
            },
            "blue": {
                "primary-color": "#4687ce"
            },
            "purple": {
                "primary-color": "#af86b9"
            },
            "brown": {
                "primary-color": "#c3a961"
            },
            "default-nav-inverse": {
                "color-block": "#242424"
            }
        }
    };
    </script>
    <!-- Separate Vendor Script Bundles -->
    <script src="<?php echo base_url()?>assets/js/vendor-core.min.js"></script>
    <!-- <script src="<?php echo base_url()?>assets/js/vendor-tables.min.js"></script> -->
    <script src="<?php echo base_url()?>assets/js/vendor-forms.min.js"></script>
    <!-- <script src="<?php echo base_url()?>assets/js/vendor-media.min.js"></script> -->
    <!-- <script src="<?php echo base_url()?>assets/js/vendor-player.min.js"></script> -->
    <!-- <script src="<?php echo base_url()?>assets/js/vendor-charts-all.min.js"></script> -->
    <!-- <script src="<?php echo base_url()?>assets/js/vendor-charts-flot.min.js"></script> -->
    <!-- <script src="<?php echo base_url()?>assets/js/vendor-charts-easy-pie.min.js"></script> -->
    <!-- <script src="<?php echo base_url()?>assets/js/vendor-charts-morris.min.js"></script> -->
    <!-- <script src="<?php echo base_url()?>assets/js/vendor-charts-sparkline.min.js"></script> -->
    <script src="<?php echo base_url()?>assets/js/vendor-maps.min.js"></script>
    <!-- <script src="<?php echo base_url()?>assets/js/vendor-tree.min.js"></script> -->
    <!-- <script src="<?php echo base_url()?>assets/js/vendor-nestable.min.js"></script> -->
    <!-- <script src="<?php echo base_url()?>assets/js/vendor-angular.min.js"></script> -->
    <!-- <script src="<?php echo base_url()?>assets/js/vendor-bundle-all.min.js"></script> -->
    <!-- <script src="<?php echo base_url()?>assets/js/module-bundle-main.min.js"></script> -->
    <script src="<?php echo base_url()?>assets/js/module-essentials.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/module-layout.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/module-sidebar.min.js"></script>
    <!-- <script src="<?php echo base_url()?>assets/js/module-media.min.js"></script> -->
    <!-- <script src="<?php echo base_url()?>assets/js/module-player.min.js"></script> -->
    <script src="<?php echo base_url()?>assets/js/module-timeline.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/module-chat.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/module-maps.min.js"></script>
    <!-- <script src="<?php echo base_url()?>assets/js/module-charts-all.min.js"></script> -->
    <!-- <script src="<?php echo base_url()?>assets/js/module-charts-flot.min.js"></script> -->
    <!-- <script src="<?php echo base_url()?>assets/js/module-charts-easy-pie.min.js"></script> -->
    <!-- <script src="<?php echo base_url()?>assets/js/module-charts-morris.min.js"></script> -->
    <!-- <script src="<?php echo base_url()?>assets/js/module-charts-sparkline.min.js"></script> -->

    <script src="<?php echo base_url()?>assets/js/theme-core.min.js"></script>
</body>

</html>