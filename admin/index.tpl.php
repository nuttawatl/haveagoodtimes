<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin-Home</title>
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

<link rel="stylesheet" type="text/css" href="../css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="../js/jquery.dataTables.js"></script>
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<?php //include "../inc/menu_admin.php";?>
	</header>

	<!-- Menu -->
	<div class="menu">
		<?php //include "../inc/hamburger_menu_admin.php";?>
	</div>
	<!-- Home -->

	<div class="home">
		<div class="background_image" style="background-image:url(../images/contact.jpg)"></div>
	</div>

	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">

				<!-- Get in touch -->
				<div class="col-lg-12">
				<div align="center"><h2>หน้าจัดการรายการการท่องเที่ยว</h2></div>
				<table id="table_id" class="display">
					<thead>
						<tr>
							<th>#</th>
							<th>title</th>
							<th>province_code</th>
							<th>startdate</th>
							<th>enddate</th>
							<th>cost</th>
							<th>img_title</th>
							<th>img_banner</th>
							<!--<th>lan</th>
							<th>lon</th>-->
							<th>status</th>
							<th>edit</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>NewZealand</td>
							<td>11</td>
							<td>11-12-2561</td>
							<td>11-15-2561</td>
							<td>2500</td>
							<td>aaaa.jpg</td>
							<td>ddd.jpg</td>
							<td>1</td>
							<td></td>
						</tr>
						<tr>
							<td>1</td>
							<td>NewZealand</td>
							<td>11</td>
							<td>11-12-2561</td>
							<td>11-15-2561</td>
							<td>3500</td>
							<td>aaaa.jpg</td>
							<td>ddd.jpg</td>
							<td>1</td>
							<td></td>
						</tr>
						<tr>
							<td>1</td>
							<td>NewZealand</td>
							<td>11</td>
							<td>11-12-2561</td>
							<td>11-15-2561</td>
							<td>800</td>
							<td>aaaa.jpg</td>
							<td>ddd.jpg</td>
							<td>1</td>
							<td></td>
						</tr>
						<tr>
							<td>1</td>
							<td>NewZealand</td>
							<td>11</td>
							<td>11-12-2561</td>
							<td>11-15-2561</td>
							<td>600</td>
							<td>aaaa.jpg</td>
							<td>ddd.jpg</td>
							<td>1</td>
							<td></td>
						</tr>
						<tr>
							<td>1</td>
							<td>NewZealand</td>
							<td>11</td>
							<td>11-12-2561</td>
							<td>11-15-2561</td>
							<td>900</td>
							<td>aaaa.jpg</td>
							<td>ddd.jpg</td>
							<td>1</td>
							<td></td>
						</tr>
					</tbody>
				</table>
				<input type="button" class="btn btn-success" id = "add" value="Add New" />
				<input type="button" class="btn btn-danger" id = "del" value="Delete" />
				</div>

			
			</div>
		</div>
	</div>
</div>


<script src="../styles/bootstrap4/popper.js"></script>
<script src="../styles/bootstrap4/bootstrap.min.js"></script>
<script src="../plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="../plugins/easing/easing.js"></script>
<script src="../plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="../js/contact.js"></script>

<script>
$(document).ready( function () {
	$('#table_id').DataTable();
	
	$("#add").click(function(){
		window.location.href="../admin/add.php";
	})
	$("#del").click(function(){
		alert("sss");
	})
} );
</script>
</body>
</html>