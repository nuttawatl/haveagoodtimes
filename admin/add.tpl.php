<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin-Add</title>
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
<script src="../library/texteditor/tinymce/tinymce.min.js"></script>
<script>
tinymce.init({
    selector: "textarea",theme: "modern",width: 680,height: 300,
    plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak",
         "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
         "table contextmenu directionality emoticons paste textcolor responsivefilemanager code"
   ],
   toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
   toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code ",
   image_advtab: true ,
   
   external_filemanager_path:"http://localhost/haveagoodtimes/library/texteditor/filemanager/",
   filemanager_title:"Responsive Filemanager" ,
   external_plugins: { "filemanager" : "http://localhost/haveagoodtimes/library/texteditor/filemanager/plugin.min.js"}
   ,relative_urls:false,
   remove_script_host:false,
   document_base_url:"http://localhost/haveagoodtimes/library/texteditor/"
 });
</script>

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
				<div align="center"><h2>เพิ่มรายการการท่องเที่ยว</h2></div>
				<form>
				<div class="form-group">
					<label for="tilte">ชื่อรายการ</label>
					<input type="text" class="form-control" id="title" aria-describedby="titleHelp" placeholder="ชื่อรายการ" >
					<!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
				</div>
				<div class="form-group">
					<label for="province">จังหวัด</label>
					<input type="text" class="form-control" id="province" placeholder="จังหวัด">
				</div>
				<div class="form-group">
					<label for="startdate">วันที่เริ่ม</label>
					<input type="text" class="form-control" id="startdate" placeholder="วันที่เริ่ม">
				</div>
				<div class="form-group">
					<label for="enddate">วันที่สิ้นสุด</label>
					<input type="text" class="form-control" id="enddate" placeholder="วันที่สิ้นสุด">
				</div>
				<div class="form-group">
					<label for="cost">ค่าใช้จ่าย</label>
					<input type="text" class="form-control" id="cost" placeholder="วันที่สิ้นสุด">
				</div>
				<div class="form-group">
					<label for="img_title">รูปภาพเล็ก</label>
					<input type="text" class="form-control" id="img_title" placeholder="รูปภาพเล็ก">
				</div>
				<div class="form-group">
					<label for="img_banner">รูปภาพ Banner</label>
					<input type="text" class="form-control" id="img_banner" placeholder="รูปภาพ Banner">
				</div>
				<div class="form-group">
					<label for="status">สถานะ</label>
					<input type="text" class="form-control" id="status" placeholder="status">
				</div>

				
				<textarea name="sss"></textarea>

				
				<button type="submit" class="btn btn-primary">Submit</button>
				<button type="button" class="btn btn-warning" id="back">Back</button>

				</form>

				
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
	$("#back").click(function(){
		window.location.href="../admin/";
	})
} );
</script>
</body>
</html>