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
     
       
        <div class="chat-window-container"></div>
       
        <div class="st-pusher" id="content">
           
            <div class="st-content">
             
                <div class="st-content-inner">
                   
				   
<?php echo $this->load->view('upload_image');?>
         
	</div>
	</div>
        <div class="footer">
            <strong>kOcAk</strong>Copyright 2015
        </div>
        <!-- // Footer -->
   
	</div>
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