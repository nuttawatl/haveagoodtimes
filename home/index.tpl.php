<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travello template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../styles/bootstrap4/bootstrap.min.css">
<link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="../styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="../styles/responsive.css">
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
   		 <?php include "../inc/hamburger_menu.php";?>
	
	<!-- Banner-Slider -->
	<div class="home">
		<?php include("../inc/bannerslider.php"); ?>
	</div>

	<!-- Search -->
	<?php //include("../inc/Search.php"); ?>
	<div class="home_search">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="home_search_container">
					<div class="home_search_title">Search for your trip</div>
					<div class="home_search_content">
						<form action="#" class="home_search_form" id="home_search_form">
							<div class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
								
								<select id="provinces" name="provinces" class="search_input search_input_1" required="required">
									<option value="">จังหวัด</option>
									<?php 
										for ($i = 0; $i < $this->limit ; $i++) {
									?>
									<option value="<?=$this->id[$i] ?>"><?= $this->name[$i] ?></option>
									
									<?php } // foreach ?> 
								</select>
								
								<input type="text" class="search_input search_input_2" id="departure" name="departure" placeholder="วันที่ออกเดินทาง" required="required" >
								<input type="text" class="search_input search_input_3" id="arrival" name="arrival" placeholder="วันที่สิ้นสุด" required="required">
								<input type="text" class="search_input search_input_4" name="budget" placeholder="Budget" required="required">
								<button class="home_search_button" >search</button>
								
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<!-- Intro -->
	 
	<div class="intro">
		<div class="intro_background" style="background-image:url(../images/intro.png)"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="intro_container">
						<div class="row">

							<!-- Intro Item -->
							<div class="col-lg-4 intro_col">
								<div class="intro_item d-flex flex-row align-items-end justify-content-start">
									<div class="intro_icon"><img src="../images/beach.svg" alt=""></div>
									<div class="intro_content">
										<div class="intro_title">Top Destinations </div>
										<div class="intro_subtitle"><p>Nulla pretium tincidunt felis, nec.</p></div>
									</div>
								</div>
							</div>

							<!-- Intro Item -->
							<div class="col-lg-4 intro_col">
								<div class="intro_item d-flex flex-row align-items-end justify-content-start">
									<div class="intro_icon"><img src="../images/wallet.svg" alt=""></div>
									<div class="intro_content">
										<div class="intro_title">The Best Prices</div>
										<div class="intro_subtitle"><p>Sollicitudin mauris lobortis in.</p></div>
									</div>
								</div>
							</div>

							<!-- Intro Item -->
							<div class="col-lg-4 intro_col">
								<div class="intro_item d-flex flex-row align-items-end justify-content-start">
									<div class="intro_icon"><img src="../images/suitcase.svg" alt=""></div>
									<div class="intro_content">
										<div class="intro_title">Amazing Services</div>
										<div class="intro_subtitle"><p>Nulla pretium tincidunt felis, nec.</p></div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Destinations -->
	<?php include("destination.php"); ?>
	
	<!-- Testimonials -->
	<?php include("testimonials.php"); ?>
	

	<!-- News -->
	<?php //include("news.php"); ?>
	

	<!-- Footer -->
	<?php include("../inc/footer.php"); ?>

</div>

<script>
$(document).ready(function(){

	$('#departure').datepicker({
				dateFormat: 'dd/mm/yy',
				changeMonth: true,
				changeYear: true, 
				beforeShow: function () { 
					var tmp = $('#departure').val();
					if(tmp != "") {
						var d = tmp.substr(0,2);
						var m = tmp.substr(3,2);
						var y = parseInt(tmp.substr(6,4))-543;
						
						$('#departure').val(d+"/"+m+"/"+y);
					}
				},
				onSelect: function (dateText, inst) {
					var d = dateText.substr(0,2);
					var m = dateText.substr(3,2);
					var y = parseInt(dateText.substr(6,4))+543;
					$('#departure').val(d+"/"+m+"/"+y);
				},
				onClose: function(dateTime){
					
					if(dateTime != "") {
						var d = dateTime.substr(0,2);
						var m = dateTime.substr(3,2);
						var y = parseInt(dateTime.substr(6,4));
						if(y < 2100){
							y= y+543 ;
						}
						else if(y > 2700){
							y = y-543;
						}
						$('#departure').val(d+"/"+m+"/"+y);
					}
				}
    });  

	$('#arrival').datepicker({
				dateFormat: 'dd/mm/yy',
				changeMonth: true,
				changeYear: true, 
				beforeShow: function () { 
					var tmp = $('#arrival').val();
					if(tmp != "") {
						var d = tmp.substr(0,2);
						var m = tmp.substr(3,2);
						var y = parseInt(tmp.substr(6,4))-543;
						
						$('#arrival').val(d+"/"+m+"/"+y);
					}
				},
				onSelect: function (dateText, inst) {
					var d = dateText.substr(0,2);
					var m = dateText.substr(3,2);
					var y = parseInt(dateText.substr(6,4))+543;
					$('#arrival').val(d+"/"+m+"/"+y);
				},
				onClose: function(dateTime){
					
					if(dateTime != "") {
						var d = dateTime.substr(0,2);
						var m = dateTime.substr(3,2);
						var y = parseInt(dateTime.substr(6,4));
						if(y < 2100){
							y= y+543 ;
						}
						else if(y > 2700){
							y = y-543;
						}
						$('#arrival').val(d+"/"+m+"/"+y);
					}
				}
    });
	
});


</script>
<script src="../styles/bootstrap4/popper.js"></script>
<script src="../styles/bootstrap4/bootstrap.min.js"></script>
<script src="../plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="../plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="../plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="../plugins/easing/easing.js"></script>
<script src="../plugins/parallax-js-master/parallax.min.js"></script>
<script src="../js/custom.js"></script>
</body>
</html>