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

	$template->content = "บริษัท แฮฟ อะ กูด ไทม แทรเวล จำกัด มีความยินดีในการให้บริการและอำนวยความสะดวกให้กับทุกท่าน หากพบปัญหาต้องการความช่วยหรือหรือร้องเรียนสามารถติดต่อได้ตามช่องทางด้านล่าง";
	$template->address = "1481 Creekside Lane Avila Beach, CA 931";
	$template->tel = "088-647-7217";
	$template->email = "himehgttour@gmail.com";

	$template->display($render);
?>