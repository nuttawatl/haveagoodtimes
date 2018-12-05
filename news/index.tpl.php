<!DOCTYPE html>
<html lang="en">
<head>
<title>News</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travello template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../styles/bootstrap4/bootstrap.min.css">
<link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="../styles/news.css">
<link rel="stylesheet" type="text/css" href="../styles/news_responsive.css">
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
		<div class="background_image" style="background-image:url(../images/news.jpg)"></div>
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
	
	<!-- News -->

	<div class="news">
		<div class="container">
			<div class="row">

				<!-- News Container -->
				<div class="col-lg-8">
					<div class="news_container">
						
						<!-- News Post -->
						<div class="news_post">
							<div class="news_post_image"><img src="../images/news_4.jpg" alt=""></div>
							<div class="news_post_content">
								<div class="news_post_date d-flex flex-row align-items-end justify-content-start">
									<div>02</div>
									<div>june</div>
								</div>
								<div class="news_post_title"><a href="#">Best tips to travel light</a></div>
								<div class="news_post_category">
									<ul>
										<li><a href="#">lifestyle & travel</a></li>
									</ul>
								</div>
								<div class="news_post_text">
									<p>Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo. Vivamus massa.Tempor massa et laoreet. Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo. Vivamus massa.Tempor massa et laoreet.</p>
								</div>
								<div class="news_post_link"><a href="#">Read More</a></div>
							</div>
						</div>

						<!-- News Post -->
						<div class="news_post">
							<div class="news_post_image"><img src="../images/news_5.jpg" alt=""></div>
							<div class="news_post_content">
								<div class="news_post_date d-flex flex-row align-items-end justify-content-start">
									<div>02</div>
									<div>june</div>
								</div>
								<div class="news_post_title"><a href="#">10 Amazing Destination for you this summer</a></div>
								<div class="news_post_category">
									<ul>
										<li><a href="#">lifestyle & travel</a></li>
									</ul>
								</div>
								<div class="news_post_text">
									<p>Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo. Vivamus massa.Tempor massa et laoreet. Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo. Vivamus massa.Tempor massa et laoreet.</p>
								</div>
								<div class="news_post_link"><a href="#">Read More</a></div>
							</div>
						</div>

						<!-- News Post -->
						<div class="news_post">
							<div class="news_post_image"><img src="../images/news_6.jpg" alt=""></div>
							<div class="news_post_content">
								<div class="news_post_date d-flex flex-row align-items-end justify-content-start">
									<div>02</div>
									<div>june</div>
								</div>
								<div class="news_post_title"><a href="#">How to organize your perfect vacation</a></div>
								<div class="news_post_category">
									<ul>
										<li><a href="#">lifestyle & travel</a></li>
									</ul>
								</div>
								<div class="news_post_text">
									<p>Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo. Vivamus massa.Tempor massa et laoreet. Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo. Vivamus massa.Tempor massa et laoreet.</p>
								</div>
								<div class="news_post_link"><a href="#">Read More</a></div>
							</div>
						</div>

					</div>

					<!-- Pagination -->
					<div class="pagination">
						<ul class="d-flex flex-row align-items-start justify-content-start">
							<li class="active"><a href="#">1.</a></li>
							<li><a href="#">2.</a></li>
							<li><a href="#">3.</a></li>
							<li><a href="#">4.</a></li>
							<li><a href="#">5.</a></li>
						</ul>
					</div>
				</div>

				<!-- News Sidebar -->
				<div class="col-lg-4">
					<div class="news_sidebar">

						<!-- Categories -->
						<div class="categories">
							<div class="sidebar_title">Categories</div>
							<div class="sidebar_list">
								<ul>
									<li><a href="#"><div class="d-flex flex-row align-items-start justify-content-start">Travels<span class="ml-auto">(09)</span></div></a></li>
									<li><a href="#"><div class="d-flex flex-row align-items-start justify-content-start">Organization<span class="ml-auto">(12)</span></div></a></li>
									<li><a href="#"><div class="d-flex flex-row align-items-start justify-content-start">Tips & Tricks<span class="ml-auto">(16)</span></div></a></li>
									<li><a href="#"><div class="d-flex flex-row align-items-start justify-content-start">Uncategorized<span class="ml-auto">(22)</span></div></a></li>
								</ul>
							</div>
						</div>

						<!-- Latest News -->
						<div class="latest">
							<div class="sidebar_title">Latest News</div>
							<div class="latest_container">
								
								<!-- Latest Post -->
								<div class="latest_post d-flex flex-row align-items-start justify-content-start">
									<div class="latest_post_image"><img src="../images/latest_1.jpg" alt=""></div>
									<div class="latest_post_content">
										<div class="latest_post_date d-flex flex-row align-items-end justify-content-start">
											<div class="latest_post_day">02</div>
											<div class="latest_post_month">june</div>
										</div>
										<div class="latest_post_title"><a href="#">Best tips to travel light</a></div>
										<div class="latest_post_text"><p>Pellentesque sit amet..</p></div>
									</div>
								</div>

								<!-- Latest Post -->
								<div class="latest_post d-flex flex-row align-items-start justify-content-start">
									<div class="latest_post_image"><img src="../images/latest_2.jpg" alt=""></div>
									<div class="latest_post_content">
										<div class="latest_post_date d-flex flex-row align-items-end justify-content-start">
											<div class="latest_post_day">02</div>
											<div class="latest_post_month">june</div>
										</div>
										<div class="latest_post_title"><a href="#">Best tips to travel light</a></div>
										<div class="latest_post_text"><p>Pellentesque sit amet..</p></div>
									</div>
								</div>

								<!-- Latest Post -->
								<div class="latest_post d-flex flex-row align-items-start justify-content-start">
									<div class="latest_post_image"><img src="../images/latest_3.jpg" alt=""></div>
									<div class="latest_post_content">
										<div class="latest_post_date d-flex flex-row align-items-end justify-content-start">
											<div class="latest_post_day">02</div>
											<div class="latest_post_month">june</div>
										</div>
										<div class="latest_post_title"><a href="#">Best tips to travel light</a></div>
										<div class="latest_post_text"><p>Pellentesque sit amet..</p></div>
									</div>
								</div>

							</div>
						</div>

						<div class="travello">
							<div class="background_image" style="background-image:url(../images/travello.jpg)"></div>
							<div class="travello_content">
								<div class="travello_content_inner">
									<div></div>
									<div></div>
								</div>
							</div>
							<div class="travello_container">
								<a href="#">
									<div class="d-flex flex-column align-items-center justify-content-end">
										<span class="travello_title">Get a 20% Discount</span>
										<span class="travello_subtitle">Buy Your Vacation Online Now</span>
									</div>
								</a>
							</div>
						</div>
						
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
<script src="../plugins/easing/easing.js"></script>
<script src="../plugins/parallax-js-master/parallax.min.js"></script>
<script src="../js/news.js"></script>
</body>
</html>