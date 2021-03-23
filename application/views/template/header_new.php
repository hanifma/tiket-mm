<!DOCTYPE html>
<html lang="en">
<head>
<title>HF FLIGHTS</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="HF" />
	<meta name="keywords" content="HF" />
	<meta name="author" content="HF" />
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo base_url() ?>_assets/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url() ?>_assets/css/icomoon.css">
	<!-- Bootstrap  -->

	<!-- Superfish -->
	<link rel="stylesheet" href="<?php echo base_url() ?>_assets/css/superfish.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?php echo base_url() ?>_assets/css/magnific-popup.css">
	<!-- Date Picker -->
	<link rel="stylesheet" href="<?php echo base_url() ?>_assets/css/bootstrap-datepicker.min.css">
	<!-- CS Select -->
	<link rel="stylesheet" href="<?php echo base_url() ?>_assets/css/cs-select.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>_assets/css/cs-skin-border.css">
	
	<link rel="stylesheet" href="<?php echo base_url() ?>_assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>_assets/css/seat.css">


	<!-- Modernizr JS -->
	<script src="<?php echo base_url() ?>_assets/js/modernizr-2.6.2.min.js"></script>
</head>

<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">


		<!-- Main Navigation -->

		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
						<div class="logo_container">
							<div class="logo"><a href=""><img src="images/logo.png" alt="">HF FLIGHTS</a></div>
						</div>
						<div class="main_nav_container ml-auto">
							<ul class="main_nav_list">
								<li class="main_nav_item"><a href="<?php echo base_url() ?>Home<?php echo base_url() ?>">Home</a></li>

								<?php if ( $this->session->userdata('user') ): ?>
								<li class="main_nav_item"><a href="<?php echo base_url() ?>reservation">My Reservation</a></li>
								<li class=" main_nav_item"><a><?php echo $this->session->userdata('user')['username'] ?></a></li>
								<li class="main_nav_item"><a href="<?php echo base_url() ?>account/logout">Keluar</a></li>
								
								<?php else: ?>
								<li class="main_nav_item"><a href="<?php echo base_url() ?>account/signin">Masuk</a></li>
								<li class="main_nav_item"><a href="<?php echo base_url() ?>account/signup">Daftar</a></li>
								<?php endif; ?>
							</ul>
						</div>

						<form id="search_form" class="search_form bez_1">
							<input type="search" class="search_content_input bez_1">
						</form>

						<div class="hamburger">
							<i class="fa fa-bars trans_200"></i>
						</div>
					</div>
				</div>
			</div>	
		</nav>

	</header>