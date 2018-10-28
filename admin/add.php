<?php
session_start();
require_once "../library/Savant3.php";
require_once "../library/adodb5/adodb.inc.php";
require_once "../library/adodb5/adodb-active-record.inc.php";
require_once "../function/config.php";
require_once "../function/connect.php";

?>

<?php
	$render = str_replace(".php", ".tpl.php", end(explode("/", $_SERVER["PHP_SELF"])));
	$template = new Savant3();
	ADOdb_Active_Record::SetDatabaseAdapter($db);

	//Get Province 
	$sql = "SELECT id,name_in_thai FROM `provinces` ORDER BY CONVERT( `name_in_thai` USING tis620 )   ASC ";
	$stmt = $db->Prepare($sql);
	$rs = $db->Execute($stmt);
	$template->listClass = $rs->GetAssoc();
	$template->listClassCount = $rs->maxRecordCount();

	$template->display($render);

	//Parameter
	$strAction = isset($_GET['submit']) ? $_GET['submit'] : '';
	$id = isset($_GET['id']) ? $_GET['id'] : '';
	$process = "add" ;

	if($strAction == ""){
		return false;
	}

	if($id != ""){
		$process = "update" ;
	}else{}

	//Load ID

	//

	if($process == "add"){
		if(checkbeforesave() == true){
			var_dump("1");
			//echo "<script>alert(กรุณากรอกข้อมูลให้ครบถ้วน);</script>";
			return false;
		}else{
			var_dump("2");
			echo "<script>alert(กรุณากรอกข้อมูลให้ครบถ้วน);</script>";
			return false;
		}
	}
	else if($process == "update")
	{
		if(checkbeforesave() == true){
			var_dump("3");
			echo "<script>alert(กรุณากรอกข้อมูลให้ครบถ้วน);</script>";
			return false;
		}else{
			var_dump("4");
			echo "<script>alert(กรุณากรอกข้อมูลให้ครบถ้วน);</script>";
			return false;
		}
	}
	else{}

	
	//
	
	function uploadfiles($input_name){
		$target_dir = "../uploads/";
		$target_file = $target_dir . basename($_FILES["".$input_name.""]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		
		//if(isset($_POST["submit"])) {
			$check = getimagesize($_FILES["".$input_name.""]["tmp_name"]);
			if($check !== false) {
				echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} else {
				echo "File is not an image.";
				$uploadOk = 0;
			}
			// Check if file already exists
			if (file_exists($target_file)) {
				//echo "Sorry, file already exists.";
				$uploadOk = 0;
			}

			if ($uploadOk == 0) {
			//echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
				if (move_uploaded_file($_FILES["".$input_name.""]["tmp_name"], $target_file)) {
					echo "The file ". basename( $_FILES["".$input_name.""]["name"]). " has been uploaded.";
				} else {
					echo "Sorry, there was an error uploading your file.";
				}
			}
		//}
	}
	
	function checkbeforesave(){
	try{
		$title  	= isset( $_POST['title']) ? $_POST['title'] : '';
		$provinces  = isset( $_POST['provinces']) ? $_POST['provinces'] : '';
		$departure  = isset( $_POST['departure']) ? $_POST['departure'] : '';
		$arrival    = isset( $_POST['arrival']) ? $_POST['arrival'] : '';
		$cost	    = isset( $_POST['cost']) ? $_POST['cost'] : '';
		$img_title  = isset( $_POST['img_title']) ? $_POST['img_title'] : '';
		$img_banner = isset( $_POST['img_banner']) ? $_POST['img_banner'] : '';
		$status     = isset( $_POST['status']) ? $_POST['status'] : '';
		$texteditor = isset( $_POST['texteditor']) ? $_POST['texteditor'] : '';
		
		//pdf
		$_SESSION["title"]  	= isset( $_SESSION["title"]) ? $title : '';
		$_SESSION["provinces"]  = isset( $_SESSION["title"]) ? $provinces : '';
		$_SESSION["departure"]  = isset( $_SESSION["title"]) ? $departure : '';
		$_SESSION["arrival"] 	= isset( $_SESSION["title"]) ? $arrival : '';
		$_SESSION["cost"]		= isset( $_SESSION["title"]) ? $cost : '';
		$_SESSION["img_title"]  = isset( $_SESSION["title"]) ? $img_title : '';
		$_SESSION["img_banner"] = isset( $_SESSION["title"]) ? $img_banner : '';
		$_SESSION["status"] 	= isset( $_SESSION["title"]) ? $status : '';
		$_SESSION["texteditor"] = isset( $_SESSION["title"]) ? $texteditor : '';

		//session
		
		//
		if($provinces == "" && $departure = "" && $arrival = ""  && $cost = "" && $img_title = "" && $img_banner = "" && $texteditor = "" ){
			return false;
		}else{

			uploadfiles("img_title");
			uploadfiles("img_banner");
			return true;
		}
	}
	catch (Exception $e){
	
	}
		
	}
	



	
	
?>