<!DOCTYPE html>
<html lang="en">
<head>
<title>About</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travello template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../styles/bootstrap4/bootstrap.min.css">
<link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="../styles/about.css">
<link rel="stylesheet" type="text/css" href="../styles/about_responsive.css">
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
		<div class="background_image" style="background-image:url(../images/about.jpg)"></div>
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
	<!-- About -->

	<div class="about">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_subtitle"><?= $this->subtopic ?></div>
					<div class="section_title"><h2><?= $this->topic ?></h2></div>
				</div>
			</div>
			<div class="row about_row">
				<div class="col-lg-6">
					<div class="about_content">
						<div class="text_highlight"><?= $this->headcontent ?></div>
						<div class="about_text">
							<p><?= $this->content ?></p>
						</div>
						<div class="button about_button"><a href="<?= $this->dbd ?>">เอกสาร หนังสือรับรอง</a></div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="about_image" ><img  src="../img/dbd.png" alt="" style="height:600px;"></div>
				</div>
			</div>
		</div>
	</div>

	<!-- Milestones -->

	<div class="milestones">
		<div class="container">
			<div class="row">
				
				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="../images/mountain.svg" alt=""></div>
						<div class="milestone_counter" data-end-value="17">0</div>
						<div class="milestone_text">Online Courses</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="../images/island.svg" alt=""></div>
						<div class="milestone_counter" data-end-value="213">0</div>
						<div class="milestone_text">Students</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="../images/camera.svg" alt=""></div>
						<div class="milestone_counter" data-end-value="11923">0</div>
						<div class="milestone_text">Teachers</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="../images/boat.svg" alt=""></div>
						<div class="milestone_counter" data-end-value="15">0</div>
						<div class="milestone_text">Countries</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Why Choose Us -->

	<div class="why">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="../images/why.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_subtitle">สถานที่ธรรมดาที่มหัศจรรย์</div>
					<div class="section_title"><h2>ทำไมคุณควรเลือกเรา</h2></div>
				</div>
			</div>
			<div class="row why_row">
				
				<!-- Why item -->
				<div class="col-lg-4 why_col">
					<div class="why_item">
						<div class="why_image">
							<img src="../images/why_1.jpg" alt="">
							<div class="why_icon d-flex flex-column align-items-center justify-content-center">
								<img src="../images/why_1.svg" alt="">
							</div>
						</div>
						<div class="why_content text-center">
							<div class="why_title">การบริการที่รวดเร็ว</div>
							<div class="why_text">
								<p>Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo.</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Why item -->
				<div class="col-lg-4 why_col">
					<div class="why_item">
						<div class="why_image">
							<img src="../images/why_2.jpg" alt="">
							<div class="why_icon d-flex flex-column align-items-center justify-content-center">
								<img src="../images/why_2.svg" alt="">
							</div>
						</div>
						<div class="why_content text-center">
							<div class="why_title">ทีมงานที่ดีมีคุณภาพ</div>
							<div class="why_text">
								<p>Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo.</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Why item -->
				<div class="col-lg-4 why_col">
					<div class="why_item">
						<div class="why_image">
							<img src="../images/why_3.jpg" alt="">
							<div class="why_icon d-flex flex-column align-items-center justify-content-center">
								<img src="../images/why_3.svg" alt="">
							</div>
						</div>
						<div class="why_content text-center">
							<div class="why_title">ดีลที่ยอดเยี่ยมที่สุด</div>
							<div class="why_text">
								<p>Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo.</p>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Team -->

	<div class="team">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_subtitle">simply amazing places</div>
					<div class="section_title"><h2>Meet the Team</h2></div>
				</div>
			</div>
			<div class="row team_row">
				
				<!-- Team Item -->
				<div class="col-xl-3 col-md-6 team_col">
					<div class="team_item d-flex flex-column align-items-center justify-content-start text-center">
						<div class="team_image"><img src="../images/team_1.jpg" alt=""></div>
						<div class="team_content">
							<div class="team_title"><a href="#">Margaret Smith</a></div>
							<div class="team_text">
								<p>Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo. Vivamus massa.</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Team Item -->
				<div class="col-xl-3 col-md-6 team_col">
					<div class="team_item d-flex flex-column align-items-center justify-content-start text-center">
						<div class="team_image"><img src="../images/team_2.jpg" alt=""></div>
						<div class="team_content">
							<div class="team_title"><a href="#">James Williams</a></div>
							<div class="team_text">
								<p>Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo. Vivamus massa.</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Team Item -->
				<div class="col-xl-3 col-md-6 team_col">
					<div class="team_item d-flex flex-column align-items-center justify-content-start text-center">
						<div class="team_image"><img src="../images/team_3.jpg" alt=""></div>
						<div class="team_content">
							<div class="team_title"><a href="#">Michael James</a></div>
							<div class="team_text">
								<p>Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo. Vivamus massa.</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Team Item -->
				<div class="col-xl-3 col-md-6 team_col">
					<div class="team_item d-flex flex-column align-items-center justify-content-start text-center">
						<div class="team_image"><img src="../images/team_4.jpg" alt=""></div>
						<div class="team_content">
							<div class="team_title"><a href="#">Noah Smith</a></div>
							<div class="team_text">
								<p>Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo. Vivamus massa.</p>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!--BOT -->
	<?php include("../inc/chatbot.php"); ?>
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
<script src="../plugins/greensock/TweenMax.min.js"></script>
<script src="../plugins/greensock/TimelineMax.min.js"></script>
<script src="../plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="../plugins/greensock/animation.gsap.min.js"></script>
<script src="../plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="../plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="../plugins/easing/easing.js"></script>
<script src="../plugins/parallax-js-master/parallax.min.js"></script>
<script src="../js/about.js"></script>
</body>
</html>