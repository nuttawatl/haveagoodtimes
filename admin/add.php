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

	$_SESSION["title"]  	= "";
	$_SESSION["provinces"]  = "";
	$_SESSION["departure"]  = "";
	$_SESSION["arrival"] 	= "";
	$_SESSION["cost"]		= "";
	$_SESSION["img_title"]  = "";
	$_SESSION["img_banner"] = "";
	$_SESSION["status"] 	= "";
	$_SESSION["texteditor"] = "";

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
			echo "<script>alert(กรุณากรอกข้อมูลให้ครบถ้วน);</script>";
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
	
	
	function checkbeforesave(){
	try{
		$title  	= isset($_GET['title']) ? $_POST['title'] : '';
		$provinces  = isset($_GET['provinces']) ? $_POST['provinces'] : '';
		$departure  = isset($_GET['departure']) ? $_POST['departure'] : '';
		$arrival    = isset($_GET['arrival']) ? $_POST['arrival'] : '';
		$cost	    = isset($_GET['cost']) ? $_POST['cost'] : '';
		$img_title  = isset($_GET['img_title']) ? $_POST['img_title'] : '';
		$img_banner = isset($_GET['img_banner']) ? $_POST['img_banner'] : '';
		$status     = isset($_GET['status']) ? $_POST['status'] : '';
		$texteditor = isset($_GET['texteditor']) ? $_POST['texteditor'] : '';
		//pdf
		$_SESSION["title"]  	= $title;
		$_SESSION["provinces"]  = $provinces;
		$_SESSION["departure"]  = $departure;
		$_SESSION["arrival"] 	= $arrival;
		$_SESSION["cost"]		= $cost;
		$_SESSION["img_title"]  = $img_title;
		$_SESSION["img_banner"] = $img_banner;
		$_SESSION["status"] 	= $status;
		$_SESSION["texteditor"] = $texteditor;

		//session


		//
		if($provinces == "" && $departure = "" && $arrival = ""  && $cost = "" && $img_title = "" && $img_banner = "" && $texteditor = "" ){
			return false;
			
		}
	}
	catch (Exception $e){
	
	}
		
	}
	



	
	
?>