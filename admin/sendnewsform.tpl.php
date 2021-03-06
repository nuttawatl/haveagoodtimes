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
<script src="../js/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

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
   
   external_filemanager_path:"https://haveagoodtime.000webhostapp.com/library/texteditor/filemanager/",
   filemanager_title:"Responsive Filemanager" ,
   external_plugins: { "filemanager" : "https://haveagoodtime.000webhostapp.com/library/texteditor/filemanager/plugin.min.js"}
   ,relative_urls:false,
   remove_script_host:false,
   document_base_url:"https://haveagoodtime.000webhostapp.com/library/texteditor/"
 });
</script>

</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<?php include "../inc/menu_admin.php";?>
	</header>

	<!-- Menu -->
	<div class="menu">
		<?php include "../inc/hamburger_menu_admin.php";?>
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
				<div align="center"><h2>แบบฟอร์มข่าวสาร</h2></div>

				<form action="sendnewsprocess.php" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="tilte">ชื่อรายการ</label> 
				
					<input type="text" class="form-control" name="subject" id="subject" aria-describedby="titleHelp" placeholder="ชื่อเรื่อง" value="" required="required" />
				</div>
				
				<div class="form-group">
					<label for="departure">อีเมล์ผู้ส่ง</label>
					<input type="text" class="form-control" name="email_sender" id="email_sender" placeholder="อีเมล์ผู้ส่ง" required="required"  value="" />
				</div>
				<div class="form-group">
					<label for="arrival">ชื่อผู้ส่ง</label>
					<input type="text" class="form-control" name="sender" id="sender" placeholder="ชื่อผู้ส่ง" required="required" value="" />
				</div>
				
				<textarea name="message" ></textarea>

				
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
		window.location.href="../admin/sendnews.php";
	})
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
} );
</script>
</body>
</html>