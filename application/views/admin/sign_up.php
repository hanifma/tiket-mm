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
	<meta name="description" content="JONFLIGHT" />
	<meta name="keywords" content="JONFLIGHT" />
	<meta name="author" content="JONFLIGHT" />
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
	<link rel="stylesheet" href="<?php echo base_url() ?>_assets/css/bootstrap.css">
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
								<li class="main_nav_item"><a href="<?php echo base_url() ?>Home"<?php echo base_url() ?>">Home</a></li>

								<?php if ( $this->session->userdata('user') ): ?>
								<li class="main_nav_item"><a href="<?php echo base_url() ?>reservation">My Reservation</a></li>
								<li class=" main_nav_item"><a><?php echo $this->session->userdata('user')['username'] ?></a></li>
								<li class="main_nav_item"><a href="<?php echo base_url() ?>account/logout">Logout</a></li>
								
								<?php else: ?>
								<li class="main_nav_item"><a href="<?php echo base_url() ?>account/signin">Login</a></li>
								<li class="main_nav_item"><a href="<?php echo base_url() ?>account/signup">Register</a></li>
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

	<div class="menu trans_500">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<div class="menu_close_container"><div class="menu_close"></div></div>
			<div class="logo menu_logo"><a href="#"><img src="images/logo.png" alt=""></a></div>
			<ul>
				<li class="menu_item"><a href="#">home</a></li>
				<li class="menu_item"><a href="about.html">about us</a></li>
				<li class="menu_item"><a href="offers.html">offers</a></li>
				<li class="menu_item"><a href="blog.html">news</a></li>
				<li class="menu_item"><a href="contact.html">contact</a></li>
			</ul>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		
		<!-- Home Slider -->

		<div class="home_slider_container">
			
			<div class="owl-carousel owl-theme home_slider">

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<!-- Image by https://unsplash.com/@anikindimitry -->
					<div class="home_slider_background" style="background-image:url(images/home_slider.jpg)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1>Mending Mbok</h1>
							<h1>Cusss Gannn</h1>
							<div class="button home_slider_button"><div class="button_bcg"></div><a href="#">explore now<span></span><span></span><span></span></a></div>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(images/home_slider.jpg)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1>discover</h1>
							<h1>the world</h1>
							<div class="button home_slider_button"><div class="button_bcg"></div><a href="#">explore now<span></span><span></span><span></span></a></div>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(images/home_slider.jpg)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1>discover</h1>
							<h1>the world</h1>
							<div class="button home_slider_button"><div class="button_bcg"></div><a href="#">explore now<span></span><span></span><span></span></a></div>
						</div>
					</div>
				</div>

			</div>
			
			<!-- Home Slider Nav - Prev -->
			<div class="home_slider_nav home_slider_prev">
				<svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
					<defs>
						<linearGradient id='home_grad_prev'>
							<stop offset='0%' stop-color='#fa9e1b'/>
							<stop offset='100%' stop-color='#8d4fff'/>
						</linearGradient>
					</defs>
					<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
					M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
					C22.545,2,26,5.541,26,9.909V23.091z"/>
					<polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
					11.042,18.219 "/>
				</svg>
			</div>
			
			<!-- Home Slider Nav - Next -->
			<div class="home_slider_nav home_slider_next">
				<svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
					<defs>
						<linearGradient id='home_grad_next'>
							<stop offset='0%' stop-color='#fa9e1b'/>
							<stop offset='100%' stop-color='#8d4fff'/>
						</linearGradient>
					</defs>
				<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
				M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
				C22.545,2,26,5.541,26,9.909V23.091z"/>
				<polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
				17.046,15.554 "/>
				</svg>
			</div>

			<!-- Home Slider Dots -->

			<div class="home_slider_dots">
				<ul id="home_slider_custom_dots" class="home_slider_custom_dots">
					<li class="home_slider_custom_dot active"><div></div>01.</li>
					<li class="home_slider_custom_dot"><div></div>02.</li>
					<li class="home_slider_custom_dot"><div></div>03.</li>
				</ul>
			</div>
			
		</div>

	</div>

	<!-- Search -->

	<div class="search">
		

		<!-- Search Contents -->
		
		<div class="container fill_height">
			<div class="row fill_height">
				<div class="col fill_height">

					<!-- Search Tabs -->

					<div class="search_tabs_container">
						<div class="search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
			
							<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/departure.png" alt="">flights</div>
						</div>		
					</div>

					<!-- Search Panel -->

					<div class="search_panel active">
						<form autocomplete="off" action="<?php echo base_url() ?>search" id="search_form_1" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start" method="GET">
							<div class="search_item">
								<div>From</div>

								<select name="rute_from" id="from" class="dropdown_item_select search_input">
									<option value="">Select</option>
									<?php foreach ($rute_all as $value) : ?>
										<option value="<?php echo $value['rute_from'] ?>"><?php echo $value['rute_from'] ?></option>
									<?php endforeach; ?>
								</select>
							</div>
							<div class="search_item">
								<div>To</div>
								<select name="rute_to" id="too" class="dropdown_item_select search_input">
									<?php foreach ($rute_all as $value) : ?>
										<option value="<?php echo $value['rute_to'] ?>"><?php echo $value['rute_to'] ?></option>
									<?php endforeach; ?>
								</select>
							</div>
							<div class="search_item">
								<div for="date-start">Check In:</div>
								<input name="depart_date" type="text" class="dropdown_item_select search_input" id="date-start" placeholder="mm/dd/yyyy" />
			
							</div>
							<div class="search_item">
								<div>Class</div>
								<select name="flight_class" id="adults_1" class="dropdown_item_select search_input">
									<option value="Economy">Economy</option>
									<option value="First">Fir</option>
								</select>
							</div>
							<div class="search_item">
								<div>Passanger</div>
								<select name="passengers" id="children_1" class="dropdown_item_select search_input">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select>
							</div>
							<button class="button search_button" value="Search Flight">search<span></span><span></span><span></span></button>
						</form>
					</div>

	<!-- Intro -->
	
	

				<!-- Intro Item -->

				

	<!-- CTA -->

	
	<script src="<?php echo base_url() ?>_assets/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo base_url() ?>_assets/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url() ?>_assets/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?php echo base_url() ?>_assets/js/jquery.waypoints.min.js"></script>
	<script src="<?php echo base_url() ?>_assets/js/sticky.js"></script>

	<!-- Stellar -->
	<script src="<?php echo base_url() ?>_assets/js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="<?php echo base_url() ?>_assets/js/hoverIntent.js"></script>
	<script src="<?php echo base_url() ?>_assets/js/superfish.js"></script>
	<!-- Magnific Popup -->
	<script src="<?php echo base_url() ?>_assets/js/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo base_url() ?>_assets/js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="<?php echo base_url() ?>_assets/js/bootstrap-datepicker.min.js"></script>
	<!-- CS Select -->
	<script src="<?php echo base_url() ?>_assets/js/classie.js"></script>
	<script src="<?php echo base_url() ?>_assets/js/selectFx.js"></script>
	
	<!-- Main JS -->
	<script src="<?php echo base_url() ?>_assets/js/main.js"></script>
	<script>
		document.getElementById('current_url').value = window.location.href;
	</script>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>

</body>

</html>