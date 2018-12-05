<!DOCTYPE html>
<html lang="en">
<head>
<title>Login</title>
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
<script src="../js/jquery-ui.js"></script>
<link rel="stylesheet" href="../css/jquery-ui.css">
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
    
    <!-- login Form -->
    <div class="contact">
		<div class="container">
        <div class="col-lg-12">
		    <div align="center"><h2>เข้าสู่ระบบ</h2></div>
        </div>
			<div class="row" >

				<!-- Get in touch -->
				<div class="col-lg-3"></div>

				<!-- login Form -->
				<div class="col-lg-6">
					<div class="contact_form_container">
						<form action="loginprocess.php" id="login_form" class="contact_form"  method="post">
							<div style="margin-bottom: 18px"><input type="email" class="contact_input contact_input_name inpt" placeholder="Your email" id="email" name="email" required="required"><div class="input_border"></div></div>
							<div style="margin-bottom: 18px"><input type="password" class="contact_input contact_input_name inpt" placeholder="Your password" id="password" name="password" required="required"><div class="input_border"></div></div>
                            <button class="contact_button" style="width:100% !important;background: #ffc107 !important;" id="submit" >เข้าสู่ระบบ</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer -->
	<?php include("../inc/footer.php"); ?>
</div>


<script>
$(document).ready(function(){
    $("#submit").click(function(){
       alert("aaa");
        // $( "#login_form" ).submit();
    })
}
</script>
<script src="../styles/bootstrap4/popper.js"></script>
<script src="../styles/bootstrap4/bootstrap.min.js"></script>
<script src="../plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="../plugins/easing/easing.js"></script>
<script src="../plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="../js/contact.js"></script>
</body>
</html>