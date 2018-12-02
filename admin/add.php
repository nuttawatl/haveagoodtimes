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

	

	//Parameter
	$strAction = isset($_GET['submit']) ? $_GET['submit'] : '';
	$id = isset($_GET['id']) ? $_GET['id'] : '';
	$process = "add" ;
	$chk = "0";
	//Load ID
	if($id != ""){
		
		$sql = " select * from `product` where id = '".$id."' ";
		$db->setFetchMode(ADODB_FETCH_ASSOC);
		$stmt = $db->Prepare($sql);
		$rs = $db->Execute($stmt);
		//$listClass = $rs->GetAssoc();
		//$listClassCount = $rs->maxRecordCount();

		//$template->title = $rs->fields["title"];

		$_SESSION["id"]      = $rs->fields["id"];
		$_SESSION["title"]  	= $rs->fields["title"];
		$_SESSION["provinces"]  = $rs->fields["provincecode"];
		$_SESSION["departure"]  = dateswapplus($rs->fields["startdate"]);
		$_SESSION["arrival"] 	= dateswapplus($rs->fields["enddate"]);
		$_SESSION["cost"]		= $rs->fields["cost"];
		$_SESSION["img_title"]  = $rs->fields["img_title"];
		$_SESSION["img_banner"] = $rs->fields["img_banner"];
		$_SESSION["status"] 	= $rs->fields["status"];
		$_SESSION["texteditor"] = $rs->fields["detail"];


		/*$template->title = $rs->fields["title"];
		$template->provinces  = $rs->fields["provincecode"];
		$template->departure  = $rs->fields["startdate"];
		$template->arrival = $rs->fields["enddate"];
		$template->cost= $rs->fields["cost"];
		$template->img_title = $rs->fields["img_title"];
		$template->img_banner  = $rs->fields["img_banner"];
		$template->status = $rs->fields["status"];
		$template->texteditor  = $rs->fields["detail"];*/
		
	}else{
		$_SESSION["id"]      = "";
		$_SESSION["title"]  	= "";
		$_SESSION["provinces"]  = "";
		$_SESSION["departure"]  = "";
		$_SESSION["arrival"] 	= "";
		$_SESSION["cost"]		= "";
		$_SESSION["img_title"]  = "";
		$_SESSION["img_banner"] = "";
		$_SESSION["status"] 	= "";
		$_SESSION["texteditor"] = "";


	}
	//
	
	if($id != ""){
		$process = "update" ;
	}

	$_SESSION["db"]  = 	$db ;
	if($strAction == ""){}
	else{
	if($process == "add"){
		if(checkbeforesave($process) == true){
			//echo "<script>alert(กรุณากรอกข้อมูลให้ครบถ้วน);</script>";
			return false;
		}else{
			echo "<script>alert(กรุณากรอกข้อมูลให้ครบถ้วน);</script>";
			return false;
		}
	}
	else if($process == "update")
	{
		if(checkbeforesave($process) == true){
			var_dump("3");
			//echo "<script>alert(กรุณากรอกข้อมูลให้ครบถ้วน);</script>";
			return false;
		}else{
			var_dump("4");
			echo "<script>alert(กรุณากรอกข้อมูลให้ครบถ้วน);</script>";
			return false;
		}
	}
	else{
		
	}
	}
		$template->display($render);
	//
	
	function uploadfiles($input_name){
		$target_dir = "../uploads/";
		$target_file = $target_dir . basename($_FILES["".$input_name.""]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		
		try{
			if($_FILES["".$input_name.""]["tmp_name"] != ""){
				$check = getimagesize($_FILES["".$input_name.""]["tmp_name"]);
				
				if($check !== false) {
					//echo "File is an image - " . $check["mime"] . ".";
					$uploadOk = 1;
					
				} else {
					//echo "File is not an image.";
					$uploadOk = 0;
					
				}
				// Check if file already exists
				if (file_exists($target_file)) {
					//echo "Sorry, file already exists.";
					$uploadOk = 0;
					return $target_file ;

				}

				if ($uploadOk == 0) {
				//echo "Sorry, your file was not uploaded.";
				// if everything is ok, try to upload file
				} else {
					if (move_uploaded_file($_FILES["".$input_name.""]["tmp_name"], $target_file)) {
						//echo "The file ". basename( $_FILES["".$input_name.""]["name"]). " has been uploaded.";
						return $target_file ;
					} else {
						//echo "Sorry, there was an error uploading your file.";
					}
				}
			}
		}
		catch(Exception  $ex)
			{
			return "" ;
			}
		//}
	}

	function checkbeforesave($process){
	$db = $_SESSION["db"];
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
		$_SESSION["provinces"]  = isset( $_SESSION["provinces"]) ? $provinces : '';
		$_SESSION["departure"]  = isset( $_SESSION["departure"]) ? ($departure) : '';
		$_SESSION["arrival"] 	= isset( $_SESSION["arrival"]) ? ($arrival) : '';
		$_SESSION["cost"]		= isset( $_SESSION["cost"]) ? $cost : '';
		$_SESSION["img_title"]  = isset( $_SESSION["img_title"]) ? $img_title : '';
		$_SESSION["img_banner"] = isset( $_SESSION["img_banner"]) ? $img_banner : '';
		$_SESSION["status"] 	= isset( $_SESSION["status"]) ? $status : '';
		$_SESSION["texteditor"] = isset( $_SESSION["texteditor"]) ? $texteditor : '';
		
		//$_SESSION["departure"] = dateswapplus($_SESSION["departure"]);
		//$_SESSION["arrival"] = dateswapplus($_SESSION["arrival"]) ;

		if(($provinces == "" && $departure = "" && $arrival = ""  && $cost = "" && $img_title = "" && $img_banner = "" && $texteditor = "" && $process == "add" ) || ($provinces == "" && $departure = "" && $arrival = ""  && $cost = ""  && $texteditor = "" && $process == "update") ) {
			$chk = "0";
		}else{
			$chk = "1";
		}

		if($chk == "0" ){
			return false;
		}else{
			//var_dump(dateswapplus($arrival));
	
			//var_dump($_SESSION["departure"]);
			//var_dump($time);
			//var_dump($newformat);
			
			//var_dump($_SESSION["title"] );
			//var_dump($_SESSION["provinces"]);
			//var_dump($_SESSION["departure"]);
			//var_dump($_SESSION["arrival"]);
			//var_dump($_SESSION["cost"]);
			//var_dump($img_title);
			//var_dump($img_banner);
			//var_dump($_SESSION["status"] );
			//var_dump(htmlentities($_SESSION["texteditor"]) );
			//var_dump($_SESSION["departure"]);
			//var_dump(dateswapminus($_SESSION["departure"]));
			//var_dump($process);
			
			
			if($process == "add")
			{
			$img_title = uploadfiles("img_title");
			$img_banner = uploadfiles("img_banner");

			$sql = " INSERT INTO `product` ";
			$sql = $sql . " (`id`, `title`, `provincecode`, `detail`, `startdate`, `enddate`, `cost`, `img_title`, `img_banner`, `lat`, `lon`, `createdate`, `createby`, `updatedate`, `updateby`, `status`) " ;
			$sql = $sql . "VALUES ( null , '".$_SESSION["title"]."' , '".$_SESSION["provinces"]."' , '".htmlentities($_SESSION["texteditor"])."', '".dateswapminus($_SESSION["departure"])."', '".dateswapminus($_SESSION["arrival"])."'  ,".$_SESSION["cost"]." ,'".$img_title."', '".$img_banner."', '-', '-', '2018-11-14 00:00:00', 'test', '2018-11-14 00:00:00', 'test', '1');";
			}
			else{
			$sql = " UPDATE  `product` SET ";
			$sql = $sql . " title = '".$_SESSION["title"]."', " ;
			$sql = $sql . " provincecode =  '".$_SESSION["provinces"]."', " ;
			$sql = $sql . " detail = '".htmlentities($_SESSION["texteditor"])."', " ;
			$sql = $sql . " startdate = '".dateswapminus($_SESSION["departure"])."', " ;
			$sql = $sql . " enddate = '".dateswapminus($_SESSION["arrival"])."', " ;
			$sql = $sql . " cost = ".$_SESSION["cost"].", " ;
			$sql = $sql . " updatedate = '2018-11-14 00:00:00', " ;
			$sql = $sql . " updateby = 'test', " ;
			$sql = $sql . " status = '1'  " ;

			if($_FILES["img_title"]["tmp_name"] != ""){	
			$img_title = uploadfiles("img_title");			
			$sql = $sql . " , `img_title` = '".$img_title."' " ;

			}
			if($_FILES["img_banner"]["tmp_name"] != ""){
			$img_banner = uploadfiles("img_banner");
			$sql = $sql . " , `img_banner` =  '".$img_banner."', " ;

			}	
			
			$sql =  substr($sql, 0, -2) ;  
			$sql = $sql . " Where id =  '".$_SESSION["id"]."' " ;

			}

			$stmt = $db->Prepare($sql);
			$rs = $db->Execute($stmt);
			$last_id = "";
			
			if($process == "add")
			{
			$last_id = $db->insert_Id();
			}
			else{
				$last_id = $_SESSION["id"] ;
			}
			
			if($last_id != "" ){
				// redirect page view
				echo "<script>location.href='add.php?id=".$last_id."';</script>";
				
			}else{
				// redirect old page
				$thispage = str_replace($_SERVER['REQUEST_URI'],"/haveagoodtimes/admin/","");
				echo "<script>location.href='".$thispage."';</script>";
			}

			return true;
		}
	}
	catch (Exception $e){
	
	}
		
	}

	function dateswapplus( $datadate ) {
		$datearray = explode("-",$datadate);
		if (strlen($datadate) > 3) {
		if($datearray[0] < 2500){
			$meyear = $datearray[0] + 543;
		}
		else{
			$meyear = $datearray[0];
		}
		$datadate=substr($datearray[2],0,2)."/".$datearray[1]."/".$meyear;
		}
		return $datadate;
	}

	
	function dateswapminus( $datadate ) {
		$datearray = explode("/",$datadate);
		if (strlen($datadate) > 3) {
		$meyear = $datearray[2] - 543;
		$datadate=$meyear."/".$datearray[1]."/".$datearray[0];
		}
		return $datadate;
		}

	
	
?>