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
	 
	
	$provinces  = isset( $_POST['provinces']) ? $_POST['provinces'] : '';
	$departure  = isset( $_POST['departure']) ? $_POST['departure'] : '';
	$arrival    = isset( $_POST['arrival']) ? $_POST['arrival'] : '';
	$budget    = isset( $_POST['budget']) ? $_POST['budget'] : '';
	$page    = isset( $_GET['page']) ? $_GET['page'] : '1';

	$sql_tmp = "";

	//$provinces = "57" ;
	//$budget = "15000" ;
	//$arrival = "2018-12-15";
	
	//หา departure ว่ามีไหม ถ้าไม่มีให้เป็นวันที่ปัจจุบัน
	if($departure == ""){
		$departure = date("Y-m-d");
	}

	if($departure != ""){
		$sql_tmp = $sql_tmp . " and startdate >= '".$departure."' ";
	}
	if($arrival != ""){
		$sql_tmp = $sql_tmp . " and enddate <= '".$arrival."' ";
	}
	if($provinces != ""){
		$sql_tmp = $sql_tmp . " and provincecode = '".$provinces."' ";
	}
	if($budget != ""){
		$sql_tmp = $sql_tmp ." and cost >= ".($budget-2500)."  and cost <= ".($budget+2500)." ";
	}

	//
	$id = [];
	$title = [];
	$departure = [];
	$arrival = [];
	$cost = [];
	$provinces = [];
	$img_title = [];
	$texteditor = [];
	$status = [];
	$i = 0 ;

	$sql = "SELECT * FROM `product` WHERE `status` = '1' ".$sql_tmp." order by startdate ";
	$db->setFetchMode(ADODB_FETCH_ASSOC);
	$stmt = $db->Prepare($sql);
	$rs = $db->Execute($stmt);

	
	if ($rs != "") {
		foreach ($rs as $row) 
		{
			$id[$i] = $row["id"];
			$title[$i] = $row["title"] ;
			$departure[$i] = $row["startdate"] ;
			$arrival[$i] = $row["enddate"];
			$cost[$i] = $row["cost"];
			$img_title[$i] = $row["img_title"];
			$provinces[$i] = $row["provincecode"];

			$tags = array("<p>", "</p>", "<font>", "</font>");
			$string = (string)$row["detail"];
			$texteditor[$i] = strip_tags($row["detail"]);
			$texteditor[$i] = substr($texteditor[$i],0,100);
		/*	var_dump($texteditor[$i]);
			$texteditor[$i] = str_replace(['<p>', '</p>'], '', $texteditor[$i]);
			var_dump($texteditor[$i]); */

			if($row["status"] == "1"){
				$status[$i] = "ใช้งาน";
			}else{
				$status[$i] = "ยกเลิก";
			}

			$i++;

			
		}
	}
	$template->id_trip = $id;
	$template->title = $title;
	$template->departure = $departure;
	$template->arrival = $arrival;
	$template->cost = $cost;
	$template->img_title = $img_title;
	$template->provinces = $provinces;
	$template->texteditor = $texteditor;
	$template->status = $status;

	$id = [];
	$name = [];
	$i = 0 ;

	$sql = "SELECT id,name_in_thai FROM `provinces` ORDER BY CONVERT( `name_in_thai` USING tis620 )   ASC ";
	$db->setFetchMode(ADODB_FETCH_ASSOC);
	$stmt = $db->Prepare($sql);
	$rs = $db->Execute($stmt);

	if ($rs != "") {
		foreach ($rs as $row) 
		{
			$id[$i] = $row["id"];
			$name[$i] = $row["name_in_thai"] ;
			$i++;
		}
	}
	$limit = (count($id));



	$template->id = $id;
	$template->name = $name;
	$template->limit = $limit;
		
	$template->display($render);
?>