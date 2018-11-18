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
							<a href="<?php echo base_url() ?>member"><img src="<?php echo base_url() ?>images/home/logo1.png" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">						
								<li><a href="<?php echo base_url() ?>member/account"><i class="fa fa-user"></i> My Account</li>
				
				<?php
				/* --test--
				foreach($view as $view){
					echo $view['user_id'];
				}
					echo "<br>";
					echo $this->session->userdata('user_id');
				*/
				?> 
				
				</li>
								<li><a href="<?php echo base_url() ?>member/cart"><i class="fa fa-shopping-cart"></i> My Cart</a></li>
								<li><a href="<?php echo base_url() ?>member/cart_chekout">My Transaction</a>
								<li><a href="<?php echo base_url() ?>member/checkout"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="<?php echo base_url() ?>member/logout"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
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
								<li><a href="<?php echo base_url() ?>member" class="active">Home</a></li>
								<li><a href="<?php echo base_url() ?>member/about">About Us</a></li>
								<li class="dropdown"><a href="#">Design & Customize<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="<?php echo base_url() ?>member/upload_design">Upload own design</a></li>
										<li><a href="<?php echo base_url() ?>member/customize">Customize</a></li>
										<li><a href="<?php echo base_url() ?>member/consult">Design Consultation</a></li>										
                                    </ul>
                                </li>
								<li class="dropdown"><a href="<?php echo base_url() ?>/member/samples">Products<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="<?php echo base_url() ?>member/tshirt">T-Shirts</a></li>
										<li><a href="<?php echo base_url() ?>member/collared">Collared Shirts</a></li>
										<li><a href="<?php echo base_url() ?>member/jacket">Jackets</a></li>	
										<li><a href="<?php echo base_url() ?>member/logo">Logos</a></li>											
                                    </ul>
                                </li> 	 								
								
								<li><a href="<?php echo base_url() ?>member/help">Help</a></li>								
								<li><a href="<?php echo base_url() ?>member/appointment">My Appointment</a></li>								
							</ul>
						</div>
					</div>
					<!--<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>-->
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->