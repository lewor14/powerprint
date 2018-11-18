<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Print IT & Go</title>
    <link href="<?php echo base_url() ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>css/price-range.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>css/animate.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>css/main.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url() ?>images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url() ?>images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url() ?>images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url() ?>images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->


	<header id="header"><!--header-->	
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>images/home/logo1.png" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">						
								<li><a href="<?php echo base_url() ?>/admin/account"><i class="fa fa-user"></i> Administrator</a></li>
								<li><a href="<?php echo base_url() ?>admin/vieworders">View Orders</a></li>
								<li><a href="<?php echo base_url() ?>admin/logout"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="<?php echo base_url() ?>admin" class="active">Home</a></li>
								
								<li class="dropdown"><a href="#">Update<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="<?php echo base_url() ?>admin/about">About Us</a></li>
										<li><a href="<?php echo base_url() ?>admin/help">Help</a></li>											
                                    </ul>
                                </li> 	 								
								
								<li class="dropdown"><a href="">Manage Samples<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="<?php echo base_url() ?>admin/addsamples">Add Products</a></li>
                                      
										<li><a href="<?php echo base_url() ?>admin/viewsamples">View Products</a></li>											
																					
                                    </ul>
                                </li>	
								<li class="dropdown"><a href="#">Customers' Requests<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="<?php echo base_url() ?>admin/view_uploaddesign">View Uploaded Designs</a></li>
                                      
										<li><a href="<?php echo base_url() ?>admin/view_customize">View Customize Shirts</a></li>											
										<li><a href="<?php echo base_url() ?>admin/view_consultation">View Consultations</a></li>											
																					
                                    </ul>
                                </li>
								<li><a href="<?php echo base_url() ?>admin/useraccounts">User Account</a></li>
								
							</ul>
						</div>
					</div>
					<!--
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
					-->
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->