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