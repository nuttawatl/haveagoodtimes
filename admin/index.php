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

	$sql = "SELECT * FROM `product`  ORDER BY id ASC "; //where status != '0'
	$db->setFetchMode(ADODB_FETCH_ASSOC);
	$stmt = $db->Prepare($sql);
	$rs = $db->Execute($stmt);
	
	$id = [];
	$title = [];
	$departure = [];
	$arrival = [];
	$cost = [];
	$status = [];
	$i = 0 ;

	if ($rs != "") {
		foreach ($rs as $row) 
		{
			$id[$i] = $row["id"];
			$title[$i] = $row["title"] ;
			$departure[$i] = $row["startdate"] ;
			$arrival[$i] = $row["enddate"];
			$cost[$i] = $row["cost"];
			if($row["status"] == "1"){
				$status[$i] = "ใช้งาน";
			}else{
				$status[$i] = "ยกเลิก";
			}
			$i++;

			//$row["provinces"] ;
			//$row["img_title"] ;
			//$row["img_banner"] ;
			//$row["texteditor"];
		}
	}
	$template->id = $id;
	$template->title = $title;
	$template->departure = $departure;
	$template->arrival = $arrival;
	$template->cost = $cost;
	$template->status = $status;

	$template->display($render);
?>