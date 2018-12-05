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
  
    $name  = isset( $_POST['name']) ? $_POST['name'] : '';
    $email  = isset( $_POST['email']) ? $_POST['email'] : '';
    
    $sql = "SELECT * FROM `subscribe` WHERE `status` = '1' and email = '".$email."' ";
	$db->setFetchMode(ADODB_FETCH_ASSOC);
	$stmt = $db->Prepare($sql);
    $rs = $db->Execute($stmt);
    
   if($rs->fields["email"] != ""){
    echo "<script>
    alert('อีเมลนี้ได้ลงทะเบียนเรียบร้อยแล้ว');
    window.location.href='../home/';
    </script>";
    exit(0);
   }

   $createddate = date("Y-m-d");
   $createdby = "sys";
   $modifieddate = date("Y-m-d");
   $modifiedby = "sys";
   $status = "1";

   $sql = "INSERT INTO subscribe (email,name,status,createddate,createdby,modifieddate,modifiedby) ";
   $sql = $sql . " VALUES('".$email."','".$name."','".$status."' , '".$createddate."'  , '".$createdby."' , '".$modifieddate."' , '".$modifiedby."')";
   $stmt = $db->Prepare($sql);
   $rs = $db->Execute($stmt);

    $sql = "SELECT * FROM `subscribe` WHERE `status` = '1' and email = '".$email."' ";
	$db->setFetchMode(ADODB_FETCH_ASSOC);
	$stmt = $db->Prepare($sql);
    $rs = $db->Execute($stmt);
    
   if($rs->fields["email"] != ""){
    echo "<script>
    alert('ลงทะเบียนเรียบร้อย');
    window.location.href='../home/';
    </script>";
    exit(0);
   }

?>