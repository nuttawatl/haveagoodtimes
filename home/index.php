<?php
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
	 
	//class provinces extends ADOdb_Active_Record{}
		//$provinces = new provinces("provinces");
		//$provinces->load("1 = ? ", "1");
		//$template->provinces = $provinces;

		//var_dump ($db->Execute("SELECT * FROM `provinces`"));
		//var_dump ($template->provinces);
		
	$template->display($render);
?>