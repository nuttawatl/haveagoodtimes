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

	$sql = "SELECT * FROM `subscribe`  ORDER BY createddate desc "; //where status != '0'
	$db->setFetchMode(ADODB_FETCH_ASSOC);
	$stmt = $db->Prepare($sql);
	$rs = $db->Execute($stmt);
	
	$email = [];
	$name = [];
	$createddate = [];
	$modifieddate = [];
	$status = [];
	$i = 0 ;

	if ($rs != "") {
		foreach ($rs as $row) 
		{
			$email[$i] = $row["email"] ;
			$name[$i] = $row["name"];
			$createddate[$i] = $row["createddate"] ;
			$modifieddate[$i] = $row["modifieddate"] ;
			
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
	$template->email = $email;
	$template->name = $name;
	$template->createddate = $createddate;
	$template->modifieddate = $modifieddate;
	$template->status = $status;

	$template->display($render);
?>