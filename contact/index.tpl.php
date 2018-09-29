<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travello template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../styles/bootstrap4/bootstrap.min.css">
<link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="../styles/contact.css">
<link rel="stylesheet" type="text/css" href="../styles/contact_responsive.css">
<script src="../js/jquery-3.2.1.min.js"></script>
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<?php include "../inc/menu.php";?>
	</header>

	<!-- Menu -->
	<div class="menu">
		<?php include "../inc/hamburger_menu.php";?>
	</div>
	<!-- Home -->

	<div class="home">
		<div class="background_image" style="background-image:url(../images/contact.jpg)"></div>
	</div>

	<!-- Search -->
	<?php include("../inc/Search.php"); ?>
	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">

				<!-- Get in touch -->
				<div class="col-lg-6">
					<div class="contact_content">
						<div class="contact_title">Get in touch with us</div>
						<div class="contact_text">
							<p>Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo. Vivamus massa.Tempor massa et laoreet. Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo. Vivamus massa.</p>
						</div>
						<div class="contact_list">
							<ul>
								<li>
									<div>address:</div>
									<div>1481 Creekside Lane Avila Beach, CA 931</div>
								</li>
								<li>
									<div>phone:</div>
									<div>+53 345 7953 32453</div>
								</li>
								<li>
									<div>email:</div>
									<div>yourmail@gmail.com</div>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Contact Form -->
				<div class="col-lg-6">
					<div class="contact_form_container">
						<form action="#" id="contact_form" class="contact_form">
							<div style="margin-bottom: 18px"><input type="text" class="contact_input contact_input_name inpt" placeholder="Your Name" required="required"><div class="input_border"></div></div>
							<div class="row">
								<div class="col-lg-6" style="margin-bottom: 18px">
									<div><input type="text" class="contact_input contact_input_email inpt" placeholder="Your E-mail" required="required"><div class="input_border"></div></div>
								</div>
								<div class="col-lg-6" style="margin-bottom: 18px">
									<div><input type="text" class="contact_input contact_input_subject inpt" placeholder="Subject" required="required"><div class="input_border"></div></div>
								</div>
							</div>
							<div><textarea class="contact_textarea contact_input inpt" placeholder="Message" required="required"></textarea><div class="input_border" style="bottom:3px"></div></div>
							<button class="contact_button">send</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Map -->

	<div class="contact_map">
		<!-- Google Map -->
		<div class="map">
			
			<div id="google_map" class="google_map">
				<div class="map_container">
					<!--<div id="map"></div>-->
					<div style="width: 100%"><iframe width="100%" height="710px" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;coord=13.833353, 100.483108&amp;q=RFMM%2B87%20%E0%B8%95%E0%B8%B3%E0%B8%9A%E0%B8%A5%20%E0%B8%9A%E0%B8%B2%E0%B8%87%E0%B8%A8%E0%B8%A3%E0%B8%B5%E0%B9%80%E0%B8%A1%E0%B8%B7%E0%B8%AD%E0%B8%87%20%E0%B8%AD%E0%B8%B3%E0%B9%80%E0%B8%A0%E0%B8%AD%E0%B9%80%E0%B8%A1%E0%B8%B7%E0%B8%AD%E0%B8%87%E0%B8%99%E0%B8%99%E0%B8%97%E0%B8%9A%E0%B8%B8%E0%B8%A3%E0%B8%B5%20%E0%B8%99%E0%B8%99%E0%B8%97%E0%B8%9A%E0%B8%B8%E0%B8%A3%E0%B8%B5+(Have%20a%20good%20time)&amp;ie=UTF8&amp;t=&amp;z=17&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/create-google-map/">Create Google Map</a></iframe></div><br />
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<?php include("../inc/footer.php"); ?>
</div>


<script src="../styles/bootstrap4/popper.js"></script>
<script src="../styles/bootstrap4/bootstrap.min.js"></script>
<script src="../plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="../plugins/easing/easing.js"></script>
<script src="../plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="../js/contact.js"></script>
</body>
</html>