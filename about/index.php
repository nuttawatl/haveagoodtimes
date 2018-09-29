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

	$template->subtopic = "สถานที่อัศจรรย์";
	$template->topic = "เรื่องราวของพวกเรา";
	$template->headcontent = "ประวัติความเป็นมาของบริษัท แฮฟ อะ กูด ไทม แทรเวล จำกัด";
	$template->content = "บริษัท แฮฟ อะ กูด ไทม แทรเวล จำกัด (HAVE A GOOD TIME TRAVEL CO., LTD) เป็นบริษัทที่ประกอบธุรกิจท่องเที่ยวทั้งภายใน และต่างประเทศ จดทะเบียนจัดตั้งเป็นนิติบุคคลตามประมวลกฎหมายแพ่ง และพาณิชย์ เมื่อวันที่ 10 กันยายน 2553 มีทุนจดทะเบียน 1,000,000 บาท          มีนางสาวเอื้อมพร ศรีสม เป็นกรรมการผู้จัดตั้ง สำนักงานใหญ่ตั้งอยู่ที่ 86/265 หมู่บ้านสราญสิริ หมู่ที่ 2 ตำบลบางพลับ อำเภอปากเกร็ด จังหวัดนนทบุรี ช่องทางการติดต่อ 02-948-2085, 080-977-6185       โดยให้บริการด้านการรับจองทัวร์ นำเที่ยวเป็นหมู่คณะ มีบริการค้นหาตั๋วเครื่องบิน ค้นหาโรงแรม สถานที่ท่องเที่ยว และให้คำปรึกษาทางด้านแพ็กเกจทัวร์ จากประสบการณ์มัคคุเทศก์ที่มีความชำนาญด้านการท่องเที่ยวมากว่า 10 ปี ทำให้เกิดการขยายธุรกิจการท่องเที่ยว เพื่อรองรับนักท่องเที่ยว จึงได้มีบริษัท แฮฟ อะ กูด ไทม แทรเวล จำกัด เกิดขึ้น  (เอื้อมพร, 2018)";
	$template->dbd = "../img/dbd.png";


	
	$template->display($render);
?>