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

	$sql = "SELECT email , member.name , createddate , modifieddate , status , role.name as role FROM `member`  left join role on member.role = role.id where  status = '1' ";
	$db->setFetchMode(ADODB_FETCH_ASSOC);
	$stmt = $db->Prepare($sql);
    $rs = $db->Execute($stmt);
	
	var_dump();
	$email = [];
	$name  = [];
	$role  = [];
	$status  = [];
	$createddate = [] ;
	$modifieddate = [] ;
	$i = 0 ;
    $email[0] = "";
    $name[0] = "";
    $role[0] = "";
	$status[0]  = "";
	$createddate[0] = "";
	$modifieddate[0] = "";

	if ($rs != "") 
	{
		foreach ($rs as $row) 
		{
			$email[$i] = $row["email"];
			$name[$i] = $row["name"] ;
			$role[$i] = $row["role"] ;
			$createddate[$i] = $row["createddate"] ;
			$modifieddate[$i] = $row["modifieddate"] ;

			if($row["status"] == "1"){
				$status[$i] = "ใช้งาน";
			}else{
				$status[$i] = "ยกเลิก";
			}
			$i++;
			
        } 
	}
	$template->role = $role;
	$template->email = $email;
	$template->name = $name;
	$template->createddate = $createddate;
	$template->modifieddate = $modifieddate;
	$template->status = $status;

	$template->display($render);
?>