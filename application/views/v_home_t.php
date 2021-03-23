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
	<meta name="description" content="HFFLIGHTS" />
	<meta name="keywords" content="HFFLIGHTS" />
	<meta name="author" content="HFFLIGHTS" />
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
							<div class="logo"><a href=""><img src="images/departure.png" alt="">HF FLIGHTS</a></div>
						</div>
						<div class="main_nav_container ml-auto">
							<ul class="main_nav_list">
								<li class="main_nav_item"><a href="<?php echo base_url() ?>Home"<?php echo base_url() ?>Home</a></li>

								<?php if ( $this->session->userdata('user') ): ?>
								<li class="main_nav_item"><a href="<?php echo base_url() ?>reservation">Pesananku</a></li>
								<li class="main_nav_item"><a class="user" style="background-color: #fff;padding: 5px;border-radius: 5px;font-weight: bold;color: #ff5f25;margin-left: 50px;"><?php echo $this->session->userdata('user')['username'] ?></a></li>
								<li class="main_nav_item"><a href="<?php echo base_url() ?>account/logout">Keluar</a></li>
								
								<?php else: ?>
								<li class="main_nav_item"><a href="<?php echo base_url() ?>account/signin">Masuk</a></li>
								<li class="main_nav_item"><a href="<?php echo base_url() ?>account/signup">Buat Akun</a></li>
								<?php endif; ?>
							</ul>
						</div>

					</div>
				</div>
			</div>	
		</nav>

	</header>


	<!-- Home -->

	<div class="home">
		
		<!-- Home Slider -->

		<div class="home_slider_container">
			
			<div class="owl-carousel owl-theme home_slider">

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<!-- Image by https://unsplash.com/@anikindimitry -->
					<div class="home_slider_background" style="background-image:url(images/pesawat.jpg)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<div class="isitext1">Dapatkan Tiket Anda</div>
							<div class="isitext2">SEKARANG!</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

	<!-- Search -->

	<div class="search">
		

		<!-- Search Contents -->
		
		<div class="container fill_height">
			<div class="row fill_height">
				<div class="col fill_height">

					<!-- Search Panel -->

					<div class="search_panel active">
						<form autocomplete="off" action="<?php echo base_url() ?>search" id="search_form_1" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start" method="GET">
							<div class="search_item">
								<div>Kota Asal</div>

								<select name="rute_from" id="from" class="dropdown_item_select search_input">
									<option value="">Pilih</option>
									<?php foreach ($rute_all as $value) : ?>
										<option value="<?php echo $value['rute_from'] ?>"><?php echo $value['rute_from'] ?></option>
									<?php endforeach; ?>
								</select>
							</div>
							<div class="search_item">
								<div>Kota Tujuan</div>
								<select name="rute_to" id="too" class="dropdown_item_select search_input">
									<option value="">Pilih</option>
									<?php foreach ($rute_all as $value) : ?>
										<option value="<?php echo $value['rute_to'] ?>"><?php echo $value['rute_to'] ?></option>
									<?php endforeach; ?>
								</select>
							</div>
							<div class="search_item">
								<div for="date-start">Tanggal</div>
								<input name="depart_date" type="text" class="dropdown_item_select search_input" id="date-start" placeholder="mm/dd/yyyy" />
			
							</div>
							<div class="search_item">
								<div>Kelas</div>
								<select name="flight_class" id="adults_1" class="dropdown_item_select search_input">
									<option value="">Pilih</option>
									<option value="Economy">Ekonomi</option>
									<option value="First">First</optiion>
								</select>
							</div>
							<div class="search_item">
								<div>Penumpang</div>
								<select name="passengers" id="children_1" class="dropdown_item_select search_input">
									<option value="">Pilih</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select>
							</div>
							<button class="button search_button" value="Search Flight">Cari</button>
						</form>
					</div>

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